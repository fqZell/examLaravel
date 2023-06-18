<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signUp(SignUpRequest $request) {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $users = User::query()->create($validated);

        Auth::login($users);

        return redirect()->route('home');
    }

    public function signIn(SignInRequest $request) {
        $validate = $request->validated();

        if (Auth::attempt($validate)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['Неверные данные для почты или логина']);
    }

    public function logOut() {
        Auth::logout();

        return redirect()->route('home');
    }
}
