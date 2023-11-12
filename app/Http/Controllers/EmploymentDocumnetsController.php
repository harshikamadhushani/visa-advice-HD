<?php

namespace App\Http\Controllers;

use App\Models\EmploymentDocument;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EmploymentDocumnetsController extends Controller
{
    public function index()
    {
        // Index
        $employment_document = EmploymentDocument::where('user_id', Auth::user()->id)->first();
        return view('employment-documents.index', compact('employment_document'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'employee' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'self_employed' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'retired' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'students' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
        ]);

        try {
            $employment_document = new EmploymentDocument();
            $employment_document->user_id = auth()->user()->id;
            $status = 'pending';

            if ($request->hasFile('employee')) {
                $file = $request->file('employee');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_employee = $fileName;
                $employment_document->doc_employee_status = $status;
            }

            if ($request->hasFile('self_employed')) {
                $file = $request->file('self_employed');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_self_employed = $fileName;
                $employment_document->doc_self_employed_status = $status;
            }

            if ($request->hasFile('retired')) {
                $file = $request->file('retired');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_retired = $fileName;
                $employment_document->doc_retired_status = $status;
            }

            if ($request->hasFile('students')) {
                $file = $request->file('students');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_students = $fileName;
                $employment_document->doc_students_status = $status;
            }

            $employment_document->save();

            return redirect()->route('employment.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
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
            'employee' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'self_employed' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'retired' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
            'students' => 'file|mimes:pdf,docx,jpeg,png,gif,jpg',
        ]);

        try {
            $employment_document = EmploymentDocument::where('user_id', Auth::user()->id)->first();
            $employment_document->user_id = auth()->user()->id;
            $status = 'pending';

            if ($request->hasFile('employee')) {
                $file = $request->file('employee');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_employee = $fileName;
                $employment_document->doc_employee_status = $status;
            }

            if ($request->hasFile('self_employed')) {
                $file = $request->file('self_employed');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_self_employed = $fileName;
                $employment_document->doc_self_employed_status = $status;
            }

            if ($request->hasFile('retired')) {
                $file = $request->file('retired');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_retired = $fileName;
                $employment_document->doc_retired_status = $status;
            }

            if ($request->hasFile('students')) {
                $file = $request->file('students');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/employment_documents/'), $fileName);

                $employment_document->doc_students = $fileName;
                $employment_document->doc_students_status = $status;
            }

            $employment_document->save();

            return redirect()->route('employment.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
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

    public function checkEmploymentDoc($id){

        $data = EmploymentDocument::where('user_id', $id)->first();
        return view('employment-documents.admin-access',compact('data'));
    }

    public function updateStatus($id, $status, $name){
        try {
            $user = EmploymentDocument::where('user_id', $id)->first();
            $user->{$name.'_status'} = $status;
            $user->save();

            $documentName = str_replace('_', ' ', str_replace('doc', '', $name));

            return redirect()->route('checkEmploymentDoc', $id)->with('SuccessMessage', $documentName . ' has been ' . $status);
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
    }
}
