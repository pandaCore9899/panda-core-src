<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req)
    {
       
        $login = $req->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        if (!Auth::attempt($login)) {
            return response(['message' => 'Invalid login credentials.']);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        Auth::user()->withAccessToken($accessToken);
        return response()->json([
            'accessToken' => $accessToken
        ]);
        return redirect()->route('home')->withHeaders([
            'Authorization' => 'Bearer '.$accessToken
        ]);
    }
    
}
