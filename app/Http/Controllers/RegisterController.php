<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;

use function Laravel\Prompts\error;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
            $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users|email', // Проверка уникальности
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Auth::login($user);
        if((session('errors'))){
            return redirect('/');
        }
        
    }
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        // Проверяем, существует ли email в базе данных
        $exists = User::where('email', $email)->exists();

        return response()
            ->json(['exists' => $exists, 'message' => 'Этот email уже занят.'], 200)
            ->header('Access-Control-Allow-Origin', 'http://127.0.0.1:8000')
            ->header('Access-Control-Allow-Credentials', 'true');
    }
}