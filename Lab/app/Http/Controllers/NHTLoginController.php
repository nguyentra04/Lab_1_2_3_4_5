<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTLoginController extends Controller
{
    public function index(){
        return view('NHT-login');
    }
    //khi sd submit
    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',]);
            //lay gtri form
        $email = $request->input('email');
        $password = $request->input('password');
    }
        
         
    
}
