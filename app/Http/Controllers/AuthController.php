<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('home');
    }

    public function formRegis(){
        return view('auth.register');
    }

    public function sendRegis(Request $req){
        $validate = $req->validate([
            'username' => 'required|min:6|max:55',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        return redirect('/')->with('sukses', 'Pendaftaran telah berhasil!');
    }

    public function formLogin(){
        return view('auth.login');
    }

    public function login(Request $req){
        $credentials = $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors('Email anda tidak terdaftar!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
