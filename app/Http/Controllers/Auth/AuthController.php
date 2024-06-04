<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Http\Requests\RegisterRequest;
Use App\Models\User;
Use Illuminate\Support\Facades\Hash;
Use App\http\Requests\LoginRequest;
Use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function index () {
        return view('frontend.auth.login');
    }
    public function login (LoginRequest $r) {

        if ($r->validated()) {
            if(Auth::guard('web')->attempt([
                'email' => $r->email, 
                'password' => $r->password])) {
                return redirect('/homepage')->with('pesan', 'berhasil login');

            } else {
                return back()->with('pesan', 'login gagal');
            }
        }
    }

   

    public function daftar() {
        return view('frontend.auth.register');
    
    }

    public function register(RegisterRequest $r) {
        if($r->validated()){
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)

            ]);

            return redirect('/')->with('pesan', 'registrasi berhasil');
        }

    }

    public function logout() {
        auth()->logout();
    
        return redirect('/');
    }



}
