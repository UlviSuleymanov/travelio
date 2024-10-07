<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use  \App\Models\Admin;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function getLogin()
    {

        return view('admin.auth.login');
    }


    public function postLogin(Request $request)
    {
        $incomingFields = $request->validate([
            'loginEmail'=>['required','email'],
            'loginPassword'=>['required'],
        ]);


        if (auth()->guard('admin')->attempt([
            'email' => $incomingFields['loginEmail'],
            'password' => $incomingFields['loginPassword'],
        ])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success', 'You are Logged in sucessfully.');

        } else {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Email or Password is wrong'
            ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        return redirect(route('auth.login'))->withSuccess("Logged out successfully!");
    }

    public function signUp(Request $request)
    {
        return view("admin.auth.signup");
    }


    public function signUpPost(Request $request)
    {
        $incomingFields = $request->validate([
            'full_name' => ['required','max:50',Rule::unique('administration','full_name')],
            'email' => ['required','email',Rule::unique('administration','email')],
            'password' => ['required','max:50'],
        ]);

        $incomingFields['password'] = Hash::make($incomingFields['password']);
        $admin = Admin::create($incomingFields);
        auth()->guard('admin')->login($admin);
        return redirect()->route('admin.dashboard')->with('success', 'Registration successful! You are logged in.');
    }



}
