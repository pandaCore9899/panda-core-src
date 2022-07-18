<?php

namespace App\Http\Controllers\PandaAuth;

use App\Http\Controllers\Controller;
use App\Utils\ViewBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.auth.login');
    }

    public function login(Request $req)
    {
        
        $login = $req->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        if (!Auth::attempt($login)) {
            return back()->withErrors([
                trans('static/login.invalid_email_or_password')
            ]);
        }
        return redirect()->route('home');
    }
    public function logout(Request $req){
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
    
}
