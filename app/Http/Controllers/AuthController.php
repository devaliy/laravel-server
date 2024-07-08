<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $field = $request->validation([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::create($field);
        return $user;
    }

    public function login(Request $request){
        return 'login';
    }

    public function logout(Request $request){
        return 'logout';
    }
}
