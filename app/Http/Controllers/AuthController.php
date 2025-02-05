<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loggout(){
        echo 'login';
    }

    public function loginSubmit(Request $request){
        dd($request);
    }
}
