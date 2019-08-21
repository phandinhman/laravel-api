<?php

namespace App\Http\Controllers\Api;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return 201;
        }
        return 200;
    }
}
