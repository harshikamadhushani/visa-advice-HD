<?php

namespace App\Http\Controllers;

use App\Models\FinancialDocument;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FinancialDocumentsController extends Controller
{
    public function index()
    {
        // Index
        $financial_document = FinancialDocument::where('user_id', Auth::user()->id)->first();
        return view('financial-documents.index', compact('financial_document'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'saving_account' => 'required|file|mimes:pdf,docx',
            'fixed_deposit_accounts' => 'required|file|mimes:pdf,docx',
            'current_accounts' => 'required|file|mimes:pdf,docx',
            'money_of_credit_cards' => 'required|file|mimes:pdf,docx',
            'insurance' => 'required|file|mimes:pdf,docx',
            'evidence_of_assets' => 'required|file|mimes:pdf,docx',
        ]);

        try {
            $financial_document = new FinancialDocument();
            $financial_document->user_id = auth()->user()->id;

            $status = 'pending';

            if ($request->hasFile('saving_account')) {

                $file = $request->file('saving_account');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_saving_account = $fileName;
                $financial_document->doc_saving_account_status = $status;
            }

            if ($request->hasFile('fixed_deposit_accounts')) {

                $file = $request->file('fixed_deposit_accounts');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_fixed_deposit_accounts = $fileName;
                $financial_document->doc_fixed_deposit_accounts_status = $status;
            }

            if ($request->hasFile('current_accounts')) {

                $file = $request->file('current_accounts');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_current_accounts = $fileName;
                $financial_document->doc_current_accounts_status = $status;
            }

            if ($request->hasFile('money_of_credit_cards')) {

                $file = $request->file('money_of_credit_cards');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_money_of_credit_cards = $fileName;
                $financial_document->doc_money_of_credit_cards_status = $status;
            }

            if ($request->hasFile('insurance')) {

                $file = $request->file('insurance');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_insurance = $fileName;
                $financial_document->doc_insurance_status = $status;
            }

            if ($request->hasFile('evidence_of_assets')) {

                $file = $request->file('evidence_of_assets');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_evidence_of_assets = $fileName;
                $financial_document->doc_evidence_of_assets_status = $status;
            }

            $financial_document->save();

            return redirect()->route('financial.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
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
            'saving_account' => 'file|mimes:pdf,docx',
            'fixed_deposit_accounts' => 'file|mimes:pdf,docx',
            'current_accounts' => 'file|mimes:pdf,docx',
            'money_of_credit_cards' => 'file|mimes:pdf,docx',
            'insurance' => 'file|mimes:pdf,docx',
            'evidence_of_assets' => 'file|mimes:pdf,docx',
        ]);

        try {
            $financial_document = FinancialDocument::where('user_id', Auth::user()->id)->first();
            $financial_document->user_id = auth()->user()->id;

            $status = 'pending';

            if ($request->hasFile('saving_account')) {

                $file = $request->file('saving_account');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_saving_account = $fileName;
                $financial_document->doc_saving_account_status = $status;
            }

            if ($request->hasFile('fixed_deposit_accounts')) {

                $file = $request->file('fixed_deposit_accounts');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_fixed_deposit_accounts = $fileName;
                $financial_document->doc_fixed_deposit_accounts_status = $status;
            }

            if ($request->hasFile('current_accounts')) {

                $file = $request->file('current_accounts');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_current_accounts = $fileName;
                $financial_document->doc_current_accounts_status = $status;
            }

            if ($request->hasFile('money_of_credit_cards')) {

                $file = $request->file('money_of_credit_cards');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_money_of_credit_cards = $fileName;
                $financial_document->doc_money_of_credit_cards_status = $status;
            }

            if ($request->hasFile('insurance')) {

                $file = $request->file('insurance');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_insurance = $fileName;
                $financial_document->doc_insurance_status = $status;
            }

            if ($request->hasFile('evidence_of_assets')) {

                $file = $request->file('evidence_of_assets');
                $fileName = time() . '.' . uniqid() . '.' .$file->extension();
                $file->move(public_path('build/financial_documents/'), $fileName);

                $financial_document->doc_evidence_of_assets = $fileName;
                $financial_document->doc_evidence_of_assets_status = $status;
            }

            $financial_document->save();

            return redirect()->route('financial.documents.index')->with('SuccessMessage', 'Documents have been submitted.');
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
}
