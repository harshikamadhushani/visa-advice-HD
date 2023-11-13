<?php

namespace App\Http\Controllers;

use App\Models\EmploymentDocument;
use App\Models\FinancialDocument;
use App\Models\NonSponsorVisit;
use App\Models\PersonalDocument;
use App\Models\SponsorVisit;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        $users = User::where('role_id', 2)
        ->leftJoin('country', 'users.id', '=', 'country.user_id')
        ->select('users.*', 'country.country_name', 'country.purpose')
        ->orderBy('id', 'desc')->get();

        $count_users = User::role('user')->count();

        $verified_count = $this->getApplicationCount('verified');

        $declined_count = $this->getApplicationCount('rejected');

        $pending_count = $this->getApplicationCount('pending');

        return view('admin.dashboard',compact('users', 'count_users', 'verified_count', 'declined_count', 'pending_count'));
    }

    public function getApplicationCount($status)
    {
        $columns = [
            'doc_current_or_previous_passport_status',
            'doc_currently_live_status',
            'doc_birth_certificate_status',
            'doc_marriage_certificate_status',
            'doc_birth_certificate_children_status',
            'doc_previous_visa_refusals_status',
            'doc_vaccination_proof_status',
        ];

        $personal_document = PersonalDocument::select(array_map(function ($column) {
            return PersonalDocument::raw("COUNT($column) as {$column}_count");
        }, $columns))
        ->where(function ($query) use ($columns, $status) {
            foreach ($columns as $column) {
                $query->orWhere($column, '=', $status);
            }
        })
        ->first();

        $personal_application_count = array_sum($personal_document->toArray());

        $columns = [
            'doc_saving_account_status',
            'doc_fixed_deposit_accounts_status',
            'doc_current_accounts_status',
            'doc_money_of_credit_cards_status',
            'doc_insurance_status',
            'doc_evidence_of_assets_status',
        ];

        $financial_document = FinancialDocument::select(array_map(function ($column) {
            return FinancialDocument::raw("COUNT($column) as {$column}_count");
        }, $columns))
        ->where(function ($query) use ($columns, $status) {
            foreach ($columns as $column) {
                $query->orWhere($column, '=', $status);
            }
        })
        ->first();

        $financial_application_count = array_sum($financial_document->toArray());

        $columns = [
            'doc_employee_status',
            'doc_self_employed_status',
            'doc_retired_status',
            'doc_students_status',
        ];

        $employment_document = EmploymentDocument::select(array_map(function ($column) {
            return EmploymentDocument::raw("COUNT($column) as {$column}_count");
        }, $columns))
        ->where(function ($query) use ($columns, $status) {
            foreach ($columns as $column) {
                $query->orWhere($column, '=', $status);
            }
        })
        ->first();

        $employment_application_count = array_sum($employment_document->toArray());

        $columns = [
            'doc_invitation_letter_status',
            'doc_residence_permit_status',
            'doc_evidence_of_available_accommodation_status',
            'doc_financial_statement_of_host_status',
            'doc_accountant_letter_and_tax_records_status',
            'doc_birth_or_marriage_certificate_status',
        ];

        $sponsor_document = SponsorVisit::select(array_map(function ($column) {
            return SponsorVisit::raw("COUNT($column) as {$column}_count");
        }, $columns))
        ->where(function ($query) use ($columns, $status) {
            foreach ($columns as $column) {
                $query->orWhere($column, '=', $status);
            }
        })
        ->first();

        $sponsor_application_count = array_sum($sponsor_document->toArray());

        $columns = [
            'doc_receipt_of_hotel_reservation_status',
            'doc_evidence_of_sufficient_funds_status',
            'doc_travel_itinerary_status',
            'doc_life_insurance_status',
        ];

        $non_sponsor_document = NonSponsorVisit::select(array_map(function ($column) {
            return NonSponsorVisit::raw("COUNT($column) as {$column}_count");
        }, $columns))
        ->where(function ($query) use ($columns, $status) {
            foreach ($columns as $column) {
                $query->orWhere($column, '=', $status);
            }
        })
        ->first();

        $non_sponsor_application_count = array_sum($non_sponsor_document->toArray());

        return $personal_application_count + $financial_application_count + $employment_application_count + $sponsor_application_count + $non_sponsor_application_count;
    }

    public function allUsers()
    {
        $users = User::where('role_id', 2)
        ->leftJoin('country', 'users.id', '=', 'country.user_id')
        ->select('users.*', 'country.country_name', 'country.purpose')
        ->get();

        return view('admin.getUsers', compact('users'));
    }

    public function getUser($id)
    {
        $data = User::where('users.id', $id)
            ->leftJoin('country', 'users.id', '=', 'country.user_id')
            ->select('users.*', 'country.country_name', 'country.purpose')
            ->first();

        return view('admin.user-profile', compact('data'));
    }


    public function getAdminDetails(){
        $profile = User::where('id', auth()->user()->id)->first();
        return view('admin.admin-profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_pic' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'about' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'passport_no' => 'nullable|string|max:255',
            'postal_address' => 'nullable|string|max:255',
        ]);

     if ($request->has('remove_profile_pic')) {

        if (auth()->user()->profile_pic) {
            unlink(public_path('build/assets/img/profile_pic/') . auth()->user()->profile_pic);
        }
        auth()->user()->update(['profile_pic' => null]);
    } elseif ($request->hasFile('profile_pic')) {
        $file = $request->file('profile_pic');
        $fileName = time() . '.' . uniqid() . '.' . $file->extension();
        $file->move(public_path('build/assets/img/profile_pic/'), $fileName);
        auth()->user()->update(['profile_pic' => $fileName]);
    }

        auth()->user()->update([
            'about' => $request->input('about'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'passport_no' => $request->input('passport_no'),
            'postal_address' => $request->input('postal_address'),
            'mobile_no' => $request->input('mobile_no'),
        ]);

        $profile = User::where('id', auth()->user()->id)->first();

        return view('admin.admin-profile', compact('profile'))->with('success', 'Profile updated successfully!');
    }
    public function removeProfilePic(Request $request)
    {
        try {
            // Remove the current profile picture
            if (auth()->user()->profile_pic) {
                unlink(public_path('build/assets/img/profile_pic/') . auth()->user()->profile_pic);
            }

            // Set profile_pic column in the database to null
            auth()->user()->update(['profile_pic' => null]);

            $profile = User::where('id', auth()->user()->id)->first();

            return view('admin.admin-profile', compact('profile'))->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            return view ('admin.admin-profile');
        }
    }
    public function userSetting(){
        $profile = User::where('id', auth()->user()->id)->first();
        return view('admin.admin-setting',compact('profile'));
    }


    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    $fail('The old password is incorrect.');
                }
            }],
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the password
        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Password has been reset successfully.');
    }
}
