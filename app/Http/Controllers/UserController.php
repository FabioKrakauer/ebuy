<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function viewEditPage(){
        $user = Auth::user();
        return view('editprofile')->with('user', $user);
    }
    
}
