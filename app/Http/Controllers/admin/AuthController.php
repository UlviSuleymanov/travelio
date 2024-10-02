<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use  \App\Models\Admin;

class AuthController extends Controller
{
    public function getLogin()
    {

        return view('admin.auth.login');
    }


    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {


            return redirect()->route('admin.dashboard')->with('success', 'You are Logged in sucessfully.');

        } else {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Email or Password is wrong'
            ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
        Session::flush();
        return redirect(route('auth.login'))->withSuccess("Logged out successfully!");
    }

    public function signUp(Request $request)
    {

        return view("admin.auth.signup");
    }


    public function signUpPost(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|',
            'password' => 'required|string|',
        ]);

        $admin = Admin::create([
            'full_name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'email_verify'=>0,
        ]);

        auth()->guard('web')->login($admin);
        return redirect()->route('admin.dashboard')->with('success', 'Registration successful! You are logged in.');
    }


    public function forgotPassword()
    {

    }

}
