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
}
