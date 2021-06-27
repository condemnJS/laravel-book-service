<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if ($request->method() === "POST") {
            Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'fio' => 'required|max:100',
                'password' => 'required|min:6|confirmed',
                'password_confirmation'
            ])->validate();

            User::create($request->all());

            return redirect()->route('login');
        }
        return view('register');
    }

    public function login(Request $request)
    {
        if ($request->method() === "POST") {
            Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ])->validate();

            if (!Auth::attempt($request->only('email', 'password'))) {
                return back()->with('error', 'Некоректный email или пароль');
            }
            return redirect()->route('index')->with('success', 'Успешная авторизация');
        }

        return view('login');
    }

    public function logout()
    {
        Auth::check() && Auth::logout();
        return redirect()->route('index')->with('success', 'Успешный выход');
    }
}
