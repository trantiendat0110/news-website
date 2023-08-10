<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function getLogin(Request $request)
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('pages.login');
        }
    }
    public function postLogin(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('Home');

        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
    public function getRegister(Request $request)
    {
        return view('pages.register');
    }
    public function postRegister(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        $credentials = array('email' => $request->email, 'password' => $request->password, 'confirm_password' => $request->confirm_password);
        $create_user = User::create($credentials);
        var_dump($create_user);

        // return view('pages.login', compact('data'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}