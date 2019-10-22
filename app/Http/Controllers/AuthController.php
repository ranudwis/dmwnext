<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\{UserSignupRequest, UserSigninRequest};
use App\User;

class AuthController extends Controller
{
    public function signup(UserSignupRequest $request)
    {
        $user = User::create($request->all());

        auth()->login($user);

        return redirect()->route('dashboard.index');
    }

    public function signin(UserSigninRequest $request)
    {
        if (auth()->attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            return redirect()->intended(route('dashboard.index'));
        } else {
            return redirect()->route('auth.signin')
                ->withInput()->withErrors([
                'failed' => 'Username atau password yang dimasukkan salah'
            ]);
        }
    }

    public function signout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
