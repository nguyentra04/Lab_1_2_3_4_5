<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function index(){
        return view('NHT-register');
    }
    public function register (Request $request){
        //tạo user
        $user = new \App\User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();
        return redirect()->route('login'); 

    }
}
