<?php

namespace App\Http\Controllers\PandaAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        return view(viewIndex('pages.home'));
    }
}
