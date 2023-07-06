<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $credentials)
    {
        if (! Auth::attempt($credentials->only('email', 'password'), $credentials->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'Неправельно введен email-адрес или пароль'
            ]);
        }
        $credentials->session()->regenerate(); 
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
