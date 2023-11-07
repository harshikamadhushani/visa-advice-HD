<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ZipArchive;

class UserProfileController extends Controller
{
    public function index()
    {

        $profile = User::where('id', auth()->user()->id)->first();
        return view("profile.index", compact('profile'));
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

        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $fileName = time() . '.' . uniqid() . '.' . $file->extension();
            $file->move(public_path('build/assets/img/profile_pic/'), $fileName);
        }

        auth()->user()->update([
            'about' => $request->input('about'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'passport_no' => $request->input('passport_no'),
            'postal_address' => $request->input('postal_address'),
            'mobile_no' => $request->input('mobile_no'),
            'profile_pic' => $fileName,
        ]);

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
    }

    public function downloadPersonalDoc($id)
    {
        $download = \App\Models\PersonalDocument::where('user_id', $id)->first();

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
}
