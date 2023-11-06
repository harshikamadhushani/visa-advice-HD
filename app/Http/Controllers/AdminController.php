<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function allUsers(){

        
        return view ('admin.getUsers');
    }
}
