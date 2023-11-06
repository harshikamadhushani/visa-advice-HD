<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){

        $profile = User::where('id', auth()->user()->id)->first();
        return view("profile.index",compact('profile'));
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
            $fileName = time() . '.' . uniqid() . '.' .$file->extension();
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




}
