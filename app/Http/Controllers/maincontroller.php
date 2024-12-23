<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function home(){
        return view('index');
    }
    public function auth(){
        return view('Auth');
    }
    public function auth_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'password' => 'required|min:4|max:100',
        ]);
        return view('Auth');
    }


}
