<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
       $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($credentials, $request->remember_me)) {
            return redirect()->route('welcome')->with(['status' => 'Login berhasil']);
        }
        
        return redirect()->back()
        ->with(['failed' => 'Login gagal, pastikan username dan password Anda benar.'])
        ->withInput($request->all());
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with(['status' => 'Anda telah logout dari sistem']);
    }
}
