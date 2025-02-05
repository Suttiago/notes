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
        //validacao de usuario
        $request->validate(
            [
                'text_username' => 'required',
                'text_password' => 'required'
            ]
            );
        //ger user input
        $usename_=$request->input("text_username");
    
        $password_= $request->input("text_password");
        echo 'ok';
    }
}
