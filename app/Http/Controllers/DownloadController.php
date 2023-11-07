<?php

namespace App\Http\Controllers;

use App\Models\FinancialDocument;
use App\Models\PersonalDocument;
use Illuminate\Http\Request;
use ZipArchive;

class DownloadController extends Controller
{
    public function downloadPersonalDocuments($id)
    {

        $download = FinancialDocument::where('user_id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'personal_documents.zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {

            $personal_documents = [
                'doc_current_or_previous_passport' => $download->doc_current_or_previous_passport,
                'doc_currently_live' => $download->doc_currently_live,
                'doc_marriage_certificate' => $download->doc_marriage_certificate,
                'doc_birth_certificate_children' => $download->doc_birth_certificate_children,
                'doc_previous_visa_refusals' => $download->doc_birth_certificate_children,
                'doc_vaccination_proof' => $download->doc_vaccination_proof,
            ];

            foreach ($personal_documents as $fieldName => $filePath) {
                if (!empty($filePath)) {
                    $file = public_path("build/personal_documents/{$filePath}");
                    if (file_exists($file)) {
                        $zip->addFile($file, $fieldName . '.' . pathinfo($file, PATHINFO_EXTENSION));
                    }
                }
            }

            $zip->close();

            return response()->download($zipFilePath, $zipFileName)->deleteFileAfterSend(true);
        } else {
            return back()->with('ErrorMessage', 'Failed to create the zip file.');
        }
    }

    public function downloadFinancialDocuments($id)
    {
        $download = PersonalDocument::where('user_id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'personal_documents2.zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            $personal_documents = [
                'doc_saving_account' => $download->doc_saving_account,
                'doc_current_accounts' => $download->doc_current_accounts,
                'doc_money_of_credit_cards' => $download->doc_money_of_credit_cards,
                'doc_insurance' => $download->doc_insurance,
                'doc_evidence_of_assets' => $download->doc_evidence_of_assets,
            ];

            foreach ($personal_documents as $fieldName => $filePath) {
                if (!empty($filePath)) {
                    $file = public_path("build/financial_documents/{$filePath}");
                    if (file_exists($file)) {
                        $zip->addFile($file, $fieldName . '.' . pathinfo($file, PATHINFO_EXTENSION));
                    }
                }
            }

            $zip->close();

            return response()->download($zipFilePath, $zipFileName)->deleteFileAfterSend(true);
        } else {
            return back()->with('ErrorMessage', 'Failed to create the zip file.');
        }
    }
}
