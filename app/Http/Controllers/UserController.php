<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Login successful');
        }

        return back()->withErrors(['error' => 'Wrong credentials', 'password' => 'Wrong password']);
    }
    public function create(Request $request)
    {
        $datosVerificados = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'birthday' => 'required|date',

        ]);

        if (User::create($datosVerificados)) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'when haces tus momos en html, el futuro es hoy viejo ',
            'password' => '',
            'birthday' => '',
            'name' => '',
        ]);
    }




}



