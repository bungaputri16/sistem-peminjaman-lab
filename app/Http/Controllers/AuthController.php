<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
     public function postlogin(Request $request){
         
        $credentials = $request->validate([
            'email' => 'required|email::dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
           $request->session()->regenerate();
           return redirect()->intended('/dashboard');
        }
        return redirect('login');
    }

     // return view('auth.login');
        // dd ($request->all());

    function forgot_password(){
        return view('auth.forgot-password');
    }
}
