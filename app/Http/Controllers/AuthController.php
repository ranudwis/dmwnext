<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\UserSignupRequest;
use App\User;

class AuthController extends Controller
{
    public function signup(UserSignupRequest $request)
    {
        $user = User::create($request->all());

        auth()->login($user);

        return redirect()->route('dashboard.index');
    }
}
