<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            dd(User::where('email', $request->email)->first()->id);
            return view("Favorite")->with('id' , User::where('email', $request->email)->id);
        }
        return back()->withInput()->withErrors(['email' => 'this is bullshit']);
        
    }
}
