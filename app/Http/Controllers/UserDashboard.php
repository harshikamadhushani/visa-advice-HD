<?php

namespace App\Http\Controllers;

use App\Models\EmploymentDocument;
use App\Models\FinancialDocument;
use App\Models\NonSponsorVisit;
use App\Models\PersonalDocument;
use App\Models\SponsorVisit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $profileCompletionPercentage = $user->getProfileCompletionPercentage();


        $columns = [
            'doc_current_or_previous_passport',
            'doc_currently_live',
            'doc_birth_certificate',
            'doc_marriage_certificate',
            'doc_birth_certificate_children',
            'doc_previous_visa_refusals',
            'doc_vaccination_proof',
        ];

        $personal_document = PersonalDocument::select(array_map(function ($column) {
            return PersonalDocument::raw("COUNT($column) as {$column}_count");
        }, $columns))
            ->where('user_id', Auth::user()->id)
            ->first();

        $personal_application_count = array_sum($personal_document->toArray());


        $columns = [
            'doc_saving_account',
            'doc_fixed_deposit_accounts',
            'doc_current_accounts',
            'doc_money_of_credit_cards',
            'doc_insurance',
            'doc_evidence_of_assets',
        ];

        $financial_document = FinancialDocument::select(array_map(function ($column) {
            return FinancialDocument::raw("COUNT($column) as {$column}_count");
        }, $columns))
            ->where('user_id', Auth::user()->id)
            ->first();

        $financial_application_count = array_sum($financial_document->toArray());


        $columns = [
            'doc_employee',
            'doc_self_employed',
            'doc_retired',
            'doc_students',
        ];

        $employment_document = EmploymentDocument::select(array_map(function ($column) {
            return EmploymentDocument::raw("COUNT($column) as {$column}_count");
        }, $columns))
            ->where('user_id', Auth::user()->id)
            ->first();

        $employment_application_count = array_sum($employment_document->toArray());


        $columns = [
            'doc_invitation_letter',
            'doc_residence_permit',
            'doc_evidence_of_available_accommodation',
            'doc_financial_statement_of_host',
            'doc_accountant_letter_and_tax_records',
            'doc_birth_or_marriage_certificate'
        ];

        $sponsor_document = SponsorVisit::select(array_map(function ($column) {
            return SponsorVisit::raw("COUNT($column) as {$column}_count");
        }, $columns))
            ->where('user_id', Auth::user()->id)
            ->first();

        $sponsor_application_count = array_sum($sponsor_document->toArray());

        $columns = [
            'doc_receipt_of_hotel_reservation',
            'doc_evidence_of_sufficient_funds',
            'doc_travel_itinerary',
            'doc_life_insurance',
        ];

        $non_sponsor_document = NonSponsorVisit::select(array_map(function ($column) {
            return NonSponsorVisit::raw("COUNT($column) as {$column}_count");
        }, $columns))
            ->where('user_id', Auth::user()->id)
            ->first();

        $non_sponsor_application_count = array_sum($non_sponsor_document->toArray());

        // Calculate

        $personal_document_percentage =  ($personal_application_count / 7) * 100;

        $financial_document_percentage =  ($financial_application_count / 6) * 100;

        $employment_document_percentage =  ($employment_application_count / 4) * 100;

        $sponsor_document_percentage =  ($sponsor_application_count / 6) * 100;

        $non_sponsor_document_percentage =  ($non_sponsor_application_count / 4) * 100;



        return view("dashboard", compact('user', 'profileCompletionPercentage', 'personal_document_percentage', 'financial_document_percentage', 'employment_document_percentage', 'sponsor_document_percentage', 'non_sponsor_document_percentage'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function destroy()
    {
    }
}
