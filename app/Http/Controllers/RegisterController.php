<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            "title" => "Registration",
            "active" => "registration"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "username" => ['required', 'min:4', 'max:100', 'unique:users'],
            "email" => 'required|unique:users|email:dns',
            'password' => 'required|confirmed|min:5'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        //    $request->session('success','Registration success!! Please Login');

        return redirect('/login')->with('success', 'Registration success!! Please Login');
    }
}
