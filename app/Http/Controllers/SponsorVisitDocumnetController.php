<?php

namespace App\Http\Controllers;

use App\Models\SponsorVisit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SponsorVisitDocumnetController extends Controller
{
    public function index()
    {
        // Index
        $sponsor_visit = SponsorVisit::where('user_id', Auth::user()->id)->first();
        return view('sponsor-visit-documents.index', compact('sponsor_visit'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'invitation_letter' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'residence_permit' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'evidence_of_available_accommodation' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'financial_statement_of_host' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'accountant_letter_and_tax_records' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'birth_or_marriage_certificate' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
        ]);

        try {

            $sponsor_visit = new SponsorVisit();
            $sponsor_visit->user_id = auth()->user()->id;
            $status = 'pending';

            if ($request->hasFile('invitation_letter')) {

                $file = $request->file('invitation_letter');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_invitation_letter = $fileName;
                $sponsor_visit->doc_invitation_letter_status = $status;
            }

            if ($request->hasFile('residence_permit')) {

                $file = $request->file('residence_permit');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_residence_permit = $fileName;
                $sponsor_visit->doc_residence_permit_status = $status;
            }

            if ($request->hasFile('evidence_of_available_accommodation')) {

                $file = $request->file('evidence_of_available_accommodation');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_evidence_of_available_accommodation = $fileName;
                $sponsor_visit->doc_evidence_of_available_accommodation_status = $status;
            }

            if ($request->hasFile('financial_statement_of_host')) {

                $file = $request->file('financial_statement_of_host');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_financial_statement_of_host = $fileName;
                $sponsor_visit->doc_financial_statement_of_host_status = $status;
            }

            if ($request->hasFile('accountant_letter_and_tax_records')) {
                $file = $request->file('accountant_letter_and_tax_records');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_accountant_letter_and_tax_records = $fileName;
                $sponsor_visit->doc_accountant_letter_and_tax_records_status = $status;
            }

            if ($request->hasFile('birth_or_marriage_certificate')) {

                $file = $request->file('birth_or_marriage_certificate');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_birth_or_marriage_certificate = $fileName;
                $sponsor_visit->doc_birth_or_marriage_certificate_status = $status;
            }
            $sponsor_visit->save();
            return redirect()->route('sponsor.visit.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'invitation_letter' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'residence_permit' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'evidence_of_available_accommodation' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'financial_statement_of_host' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'accountant_letter_and_tax_records' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'birth_or_marriage_certificate' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
        ]);

        try {
            $sponsor_visit = SponsorVisit::where('user_id', Auth::user()->id)->first();
            $sponsor_visit->user_id = auth()->user()->id;
            $status = 'pending';

            if ($request->hasFile('invitation_letter')) {

                $file = $request->file('invitation_letter');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_invitation_letter = $fileName;
                $sponsor_visit->doc_invitation_letter_status = $status;
            }

            if ($request->hasFile('residence_permit')) {

                $file = $request->file('residence_permit');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_residence_permit = $fileName;
                $sponsor_visit->doc_residence_permit_status = $status;
            }

            if ($request->hasFile('evidence_of_available_accommodation')) {

                $file = $request->file('evidence_of_available_accommodation');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_evidence_of_available_accommodation = $fileName;
                $sponsor_visit->doc_evidence_of_available_accommodation_status = $status;
            }

            if ($request->hasFile('financial_statement_of_host')) {

                $file = $request->file('financial_statement_of_host');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_financial_statement_of_host = $fileName;
                $sponsor_visit->doc_financial_statement_of_host_status = $status;
            }

            if ($request->hasFile('accountant_letter_and_tax_records')) {
                $file = $request->file('accountant_letter_and_tax_records');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_accountant_letter_and_tax_records = $fileName;
                $sponsor_visit->doc_accountant_letter_and_tax_records_status = $status;
            }

            if ($request->hasFile('birth_or_marriage_certificate')) {

                $file = $request->file('birth_or_marriage_certificate');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/sponsor_visit/'), $fileName);

                $sponsor_visit->doc_birth_or_marriage_certificate = $fileName;
                $sponsor_visit->doc_birth_or_marriage_certificate_status = $status;
            }
            $sponsor_visit->save();
            return redirect()->route('sponsor.visit.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }

    public function delete()
    {

    }

    public function destroy()
    {

    }

    public function checkSponsorDoc($id){

        $data = SponsorVisit::where('user_id', $id)->first();
        return view('sponsor-visit-documents.admin-access',compact('data'));
    }

    public function updateStatus($id, $status, $name){
        try {
            $user = SponsorVisit::where('user_id', $id)->first();
            $user->{$name.'_status'} = $status;
            $user->save();

            $documentName = str_replace('_', ' ', str_replace('doc', '', $name));

            return redirect()->route('checkSponsorDoc', $id)->with('SuccessMessage', $documentName . ' has been ' . $status);
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }
}
