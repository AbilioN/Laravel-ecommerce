<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['account']);
    }
    public function account(){
        return view('user.account');
    }
}
