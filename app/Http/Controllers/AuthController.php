<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    // public function login(){

    //     // return view('auth.login');
        
    //        }



    public function login()
{
    return view('auth.login');
}

public function authenticate(Request $request)
{
    // Lakukan validasi data login
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil
        return redirect('dashboard');
    } else {
        // Login gagal
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

   
}







    //  public function postlogin(Request $request){
         
    //     $credentials = $request->validate([
    //         'email' => 'required|email::dns',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($credentials)){
    //        $request->session()->regenerate();
    //        return redirect()->intended('/dashboard');
    //     }
    //     return back()->with('loginError', 'Login Gagal!');
    // }

    
        // dd ($request->all());

    function forgot_password(){
        return view('auth.forgot-password');
    }

}
