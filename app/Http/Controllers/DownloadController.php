<?php

namespace App\Http\Controllers;

use App\Models\EmploymentDocument;
use App\Models\FinancialDocument;
use App\Models\NonSponsorVisit;
use App\Models\PersonalDocument;
use App\Models\SponsorVisit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use ZipArchive;

class DownloadController extends Controller
{
    public function downloadPersonalDocuments($id)
    {

        $download = PersonalDocument::where('user_id', $id)->first();
        $user = User::Select('name')->where('id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'personal_documents_(' . $user->name . ').zip';
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
        $download = FinancialDocument::where('user_id', $id)->first();
        $user = User::Select('name')->where('id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'financial_documents_(' . $user->name . ').zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            $financial_documents = [
                'doc_saving_account' => $download->doc_saving_account,
                'doc_current_accounts' => $download->doc_current_accounts,
                'doc_money_of_credit_cards' => $download->doc_money_of_credit_cards,
                'doc_insurance' => $download->doc_insurance,
                'doc_evidence_of_assets' => $download->doc_evidence_of_assets,
            ];

            foreach ($financial_documents as $fieldName => $filePath) {
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

    public function downloadEmploymentDocuments($id)
    {
        $download = EmploymentDocument::where('user_id', $id)->first();
        $user = User::Select('name')->where('id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'employment_documents_(' . $user->name . ').zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            $employment_documents = [
                'doc_employee' => $download->doc_employee,
                'doc_self_employed' => $download->doc_self_employed,
                'doc_retired' => $download->doc_retired,
                'doc_students' => $download->doc_students,
            ];

            foreach ($employment_documents as $fieldName => $filePath) {
                if (!empty($filePath)) {
                    $file = public_path("build/employment_documents/{$filePath}");
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

    public function downloadSponsorDocuments($id)
    {
        $download = SponsorVisit::where('user_id', $id)->first();
        $user = User::Select('name')->where('id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'sponsor_documents_(' . $user->name . ').zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            $sponsor_documents = [
                'doc_invitation_letter' => $download->doc_invitation_letter,
                'doc_residence_permit' => $download->doc_residence_permit,
                'doc_evidence_of_available_accommodation' => $download->doc_evidence_of_available_accommodation,
                'doc_financial_statement_of_host' => $download->doc_financial_statement_of_host,
                'doc_accountant_letter_and_tax_records' => $download->doc_accountant_letter_and_tax_records,
                'doc_birth_or_marriage_certificate' => $download->doc_birth_or_marriage_certificate
            ];

            foreach ($sponsor_documents as $fieldName => $filePath) {
                if (!empty($filePath)) {
                    $file = public_path("build/sponsor_visit/{$filePath}");
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

    public function downloadNonSponsorDocuments($id)
    {
        $download = NonSponsorVisit::where('user_id', $id)->first();
        $user = User::Select('name')->where('id', $id)->first();

        if (!$download) {
            return abort(404);
        }

        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'non_sponsor_documents_(' . $user->name . ').zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            $non_sponsor_documents = [
                'doc_receipt_of_hotel_reservation' => $download->doc_receipt_of_hotel_reservation,
                'doc_evidence_of_sufficient_funds' => $download->doc_evidence_of_sufficient_funds,
                'doc_travel_itinerary' => $download->doc_travel_itinerary,
                'doc_life_insurance' => $download->doc_life_insurance
            ];

            foreach ($non_sponsor_documents as $fieldName => $filePath) {
                if (!empty($filePath)) {
                    $file = public_path("build/non_sponsor_visit/{$filePath}");
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

    public function downloadAllDocuments($id)
    {
        $user = User::select('name')->where('id', $id)->first();
        $tempDirectory = storage_path('app/temp_zip');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        $zip = new ZipArchive;
        $zipFileName = 'all_documents_(' . $user->name . ').zip';
        $zipFilePath = $tempDirectory . '/' . $zipFileName;

        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {

            $personalZipFile = $this->downloadPersonalDocuments($id);
            $financialZipFile = $this->downloadFinancialDocuments($id);
            $employmentZipFile = $this->downloadEmploymentDocuments($id);
            $sponsorZipFile = $this->downloadSponsorDocuments($id);
            $nonSponsorZipFile = $this->downloadNonSponsorDocuments($id);

            $zip->addFile($personalZipFile->getFile()->getPathname(), 'personal.zip');
            $zip->addFile($financialZipFile->getFile()->getPathname(), 'financial.zip');
            $zip->addFile($employmentZipFile->getFile()->getPathname(), 'employment.zip');
            $zip->addFile($sponsorZipFile->getFile()->getPathname(), 'sponsor.zip');
            $zip->addFile($nonSponsorZipFile->getFile()->getPathname(), 'non_sponsor.zip');

            $zip->close();

            unlink($personalZipFile->getFile()->getPathname());
            unlink($financialZipFile->getFile()->getPathname());
            unlink($employmentZipFile->getFile()->getPathname());
            unlink($sponsorZipFile->getFile()->getPathname());
            unlink($nonSponsorZipFile->getFile()->getPathname());

            return response()->download($zipFilePath, $zipFileName)->deleteFileAfterSend(true);
        } else {
            return back()->with('ErrorMessage', 'Failed to create the main zip file.');
        }
    }

}
