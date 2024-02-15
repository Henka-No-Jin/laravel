<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view ('register.index', ["title" => "Register"]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email|unique:users,email,NULL,id",
            "password" => "required",
        ]);
        
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success', 'Register Berhasil');
        return redirect('/login/index');
    }
}
