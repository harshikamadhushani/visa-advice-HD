<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

    public function removeProfilePic(Request $request)
    {
        try {
            // Remove the current profile picture
            if (auth()->user()->profile_pic) {
                unlink(public_path('build/assets/img/profile_pic/') . auth()->user()->profile_pic);
            }

            // Set profile_pic column in the database to null
            auth()->user()->update(['profile_pic' => null]);

            return redirect()->route('user.profile')->with('success', 'Profile picture removed successfully');
        } catch (\Exception $e) {
            return redirect()->route('user.profile')->with('error', 'Failed to remove profile picture. Please try again.');
        }
    }

    public function saveCountry($id,Request $request){

       try {
        $country = Country::updateOrCreate(
            ['user_id' => $id],
            ['country_name' => $request->input('country'), 'purpose' => $request->input('purpose')]
        );

            return redirect()->route('user.dashboard')->with('SuccessMessage', 'Documents have been submitted.');
        } catch (Exception $e) {
            Log::emergency("File: " . $e->getFile() . " Line: " . $e->getLine() . " Message: " . $e->getMessage());
            return redirect()->back()->with('ErrorMessage', 'Technical Error. Please contact our Customer Service.');
        }
   }


}
