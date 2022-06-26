<?php

namespace App\Http\Controllers\PandaAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Data\User;
use App\Utils\ViewBuilder;

class SignupController extends Controller
{
    protected $limit_options = [4, 10, 50, 100, 500];
    public function index(Request $request)
    {
        $builder = new ViewBuilder();
        $builder->setView('pages.auth.signup');
        return $builder();
    }
    public function signup(Request $req)
    {
        $user = new User();
        $user->name = $req->get('name');
        $user->password = Hash::make( $req->get('password'));
        $user->email =  $req->get('email');
        $user->save();
        return back();
    }
}
