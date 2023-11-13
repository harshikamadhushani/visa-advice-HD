<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function index(){
        $user = User::where('id', auth()->user()->id)->first();
        $profileCompletionPercentage = $user->getProfileCompletionPercentage();
        return view("dashboard",compact('user','profileCompletionPercentage'));
    }
}
