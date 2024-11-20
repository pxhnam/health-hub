<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\UserRole;
use App\Enums\UserState;
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
        $credentials = $request->validated();
        $remember = $request->has('remember');

        if (Auth::attemptWhen(
            $credentials,
            function (User $user) {
                return $user->state === UserState::ACTIVED->value and
                    $user->hasRole(UserRole::USER->value);
            },
            $remember
        )) {
            $request->session()->regenerate();
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
