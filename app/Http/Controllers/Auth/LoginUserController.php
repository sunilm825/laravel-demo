<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function login()
    {
        if (Auth::check()) {

            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }

    public function loginSuccess(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        //dd($request);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            return redirect()->route('user.index')->withSuccess('Login successfully');
        } else {

            return redirect()->route('login')->withSuccess('Login failed');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
