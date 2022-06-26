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
    protected $limit_options = [4, 10, 50, 100, 500];
    public function index(Request $request)
    {
        $builder = new ViewBuilder();
        $builder->setView('pages.auth.login');
        return $builder();
    }

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
        return redirect()->route('home');
    }
    public function logout(Request $req){
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
    
}
