<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home')->with('success', 'Anda berhasil logout');
    }

    public function index(){
        return view ('login.index', ["title" => "Login"]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($validateData)) {
            // Authentication successful
            $request->session()->flash('success', 'Login Berhasil');
            return redirect('/dashboard/index');
        } else {
            // Authentication failed
            throw ValidationException::withMessages([
                'email' => ['Invalid email or password'],
            ]);
        }
    }
}