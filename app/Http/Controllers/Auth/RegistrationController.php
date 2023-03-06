<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registrationForm()
    {
        if (Auth::check()) {

            return redirect()->back();
        } else {    

            return view('auth.registration');
        }
    }
}
