<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index(){
        $users = User::where('role_id', 2)
        ->orderBy('id', 'desc')->get();
        return view('admin.dashboard',compact('users'));
    }
    public function allUsers()
    {
        $users = User::where('role_id', 2)
        ->leftJoin('country', 'users.id', '=', 'country.user_id')
        ->select('users.*', 'country.country_name', 'country.purpose')
        ->get();

        return view('admin.getUsers', compact('users'));
    }

    public function getUser($id)
    {
        $data=User::where('id', $id)->first();
        return view('admin.user-profile', compact('data'));
    }


    public function getAdminDetails(){
        $profile = User::where('id', auth()->user()->id)->first();
        return view('admin.admin-profile', compact('profile'));
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

        $profile = User::where('id', auth()->user()->id)->first();

        return view('admin.admin-profile', compact('profile'))->with('success', 'Profile updated successfully!');
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

            $profile = User::where('id', auth()->user()->id)->first();

            return view('admin.admin-profile', compact('profile'))->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            return view ('admin.admin-profile');
        }
    }
}
