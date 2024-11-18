<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('client.pages.auth.login');
    }

    public function auth(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('');
        } else {
            return back()->withErrors([
                'general' => 'Incorrect account or password!',
            ])->onlyInput('email');
        }
    }

    public function register()
    {
        return view('client.pages.auth.register');
    }

    public function new(RegisterRequest $request)
    {
        dd($request->all());
    }
}
