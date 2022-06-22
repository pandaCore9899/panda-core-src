<?php

namespace App\Http\Controllers\PandaAuth;

use App\Http\Controllers\Controller;
use App\Utils\ViewBuilder;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $limit_options = [4,10, 50, 100, 500];
    public function index(Request $request){
        $builder = new ViewBuilder();
        $builder->setView('pages.auth.login');
        return $builder();
    }
}
