<?php

namespace App\Http\Controllers;

use App\Models\PersonalDocument;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PersonalDocumentsController extends Controller
{
    public function index()
    {
        $personal_document = PersonalDocument::where('user_id', auth()->user()->id)->first();
        return view('personal-documnets.index', compact('personal_document'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_or_previous_passport' => 'required|file|mimes:pdf,jpeg,png,gif,jpg',
            'currently_live' => 'required|file|mimes:pdf,jpeg,png,gif,jpg',
            'birth_certificate' => 'required|file|mimes:pdf,jpeg,png,gif,jpg',
            'marriage_certificate' => 'file|mimes:pdf,jpeg,png,gif,jpg',
            'birth_certificate_children' => 'file|mimes:pdf,jpeg,png,gif,jpg',
            'previous_visa_refusals' => 'file|mimes:pdf,jpeg,png,gif,jpg',
            'vaccination_proof' => 'file|mimes:pdf,jpeg,png,gif,jpg',
        ]);

        try {
            $personal_document = new PersonalDocument();
            $personal_document->user_id = auth()->user()->id;

            $status = 'pending';

            if ($request->hasFile('current_or_previous_passport')) {

                $file = $request->file('current_or_previous_passport');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_current_or_previous_passport = $fileName;
                $personal_document->doc_current_or_previous_passport_status = $status;
            }


            if ($request->hasFile('currently_live')) {


                $file = $request->file('currently_live');
                $fileName = time()  . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_currently_live = $fileName;
                $personal_document->doc_currently_live_status = $status;
            }

            if ($request->hasFile('birth_certificate')) {

                $file = $request->file('birth_certificate');
                $fileName = time() . uniqid() .  '.' .  $file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_birth_certificate = $fileName;
                $personal_document->doc_birth_certificate_status = $status;
            }

            if ($request->hasFile('marriage_certificate')) {

                $file = $request->file('marriage_certificate');
                $fileName = time() . uniqid() . '.' . $file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_marriage_certificate = $fileName;
                $personal_document->doc_marriage_certificate_status = $status;
            }

            if ($request->hasFile('birth_certificate_children')) {

                $file = $request->file('birth_certificate_children');
                $fileName = time() . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_birth_certificate_children = $fileName;
                $personal_document->doc_birth_certificate_children_status = $status;
            }

            if ($request->hasFile('previous_visa_refusals')) {

                $file = $request->file('previous_visa_refusals');
                $fileName = time() . uniqid() . '.' . $file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_previous_visa_refusals = $fileName;
                $personal_document->doc_previous_visa_refusals_status = $status;
            }

            if ($request->hasFile('vaccination_proof')) {

                $file = $request->file('vaccination_proof');
                $fileName = time()  . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_vaccination_proof = $fileName;
                $personal_document->doc_vaccination_proof_status = $status;
            }
            $personal_document->save();
            return redirect()->route('personal.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
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
            'current_or_previous_passport' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'currently_live' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'birth_certificate' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'marriage_certificate' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'birth_certificate_children' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'previous_visa_refusals' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'vaccination_proof' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
        ]);

        try {
            $personal_document = PersonalDocument::find($id);
            $personal_document->user_id = auth()->user()->id;

            $status = 'pending';

            if ($request->hasFile('current_or_previous_passport')) {

                $file = $request->file('current_or_previous_passport');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_current_or_previous_passport = $fileName;
                $personal_document->doc_current_or_previous_passport_status = $status;
            }


            if ($request->hasFile('currently_live')) {


                $file = $request->file('currently_live');
                $fileName = time()  . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_currently_live = $fileName;
                $personal_document->doc_currently_live_status = $status;
            }

            if ($request->hasFile('birth_certificate')) {

                $file = $request->file('birth_certificate');
                $fileName = time() . uniqid() .  '.' .  $file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_birth_certificate = $fileName;
                $personal_document->doc_birth_certificate_status = $status;
            }

            if ($request->hasFile('marriage_certificate')) {

                $file = $request->file('marriage_certificate');
                $fileName = time() . uniqid() . '.' . $file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_marriage_certificate = $fileName;
                $personal_document->doc_marriage_certificate_status = $status;
            }

            if ($request->hasFile('birth_certificate_children')) {

                $file = $request->file('birth_certificate_children');
                $fileName = time() . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_birth_certificate_children = $fileName;
                $personal_document->doc_birth_certificate_children_status = $status;
            }

            if ($request->hasFile('previous_visa_refusals')) {

                $file = $request->file('previous_visa_refusals');
                $fileName = time() . uniqid() . '.' . $file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_previous_visa_refusals = $fileName;
                $personal_document->doc_previous_visa_refusals_status = $status;
            }

            if ($request->hasFile('vaccination_proof')) {

                $file = $request->file('vaccination_proof');
                $fileName = time()  . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/personal_documents/'), $fileName);

                $personal_document->doc_vaccination_proof = $fileName;
                $personal_document->doc_vaccination_proof_status = $status;
            }
            $personal_document->save();
            return redirect()->route('personal.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
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

    public function checkPersonalDoc($id){
        $user = PersonalDocument::where('user_id', $id)->get();
     return view('personal-documnets.admin-access',compact('user'));
    }
    public function updateStatus($id, Request $request)
    {
        try {
            $personalDocument = PersonalDocument::where('user_id', $id)->first();
            if ($request->has('current_passport_accept')) {
                $personalDocument->update([
                    'doc_current_or_previous_passport_status' => 'verified'
                ]);
            }
            if ($request->has('current_passport_reject')) {
                $personalDocument->update([
                    'doc_current_or_previous_passport_status' => 'rejected'
                ]);
            }
            if ($request->has('document_show_accept')) {
                $personalDocument->update([
                    'doc_currently_live_status' => 'verified'
                ]);
            }
            if ($request->has('document_show_reject')) {
                $personalDocument->update([
                    'doc_currently_live_status' => 'rejected'
                ]);
            }
            if ($request->has('birth_cetificate_accept')) {
                $personalDocument->update([
                    'doc_birth_certificate_status' => 'verified'
                ]);
            }
            if ($request->has('birth_cetificate_reject')) {
                $personalDocument->update([
                    'doc_birth_certificate_status' => 'rejected'
                ]);
            }
            if ($request->has('marriage_certicate_accept')) {
                $personalDocument->update([
                    'doc_marriage_certificate_status' => 'verified'
                ]);
            }
            if ($request->has('marriage_certicate_reject')) {
                $personalDocument->update([
                    'doc_marriage_certificate_status' => 'rejected'
                ]);
            }
            if ($request->has('birth_certificate_children_accept')) {
                $personalDocument->update([
                    'doc_birth_certificate_children_status' => 'verified'
                ]);
            }
            if ($request->has('birth_certificate_children_reject')) {
                $personalDocument->update([
                    'doc_birth_certificate_children_status' => 'rejected'
                ]);
            }
            if ($request->has('visa_refusals_accept')) {
                $personalDocument->update([
                    'doc_previous_visa_refusals_status' => 'verified'
                ]);
            }
            if ($request->has('visa_refusals_reject')) {
                $personalDocument->update([
                    'doc_previous_visa_refusals_status' => 'rejected'
                ]);
            }
            if ($request->has('vaccination_accept')) {
                $personalDocument->update([
                    'doc_vaccination_proof_status' => 'verified'
                ]);
            }
            if ($request->has('vaccination_reject')) {
                $personalDocument->update([
                    'doc_vaccination_proof_status' => 'rejected'
                ]);
            }
            return redirect()->route('checkDoc', $id)->with('SuccessMessage', 'Documents have been submitted.');
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }

}
