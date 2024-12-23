<?php

use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [maincontroller::class, 'home']);
Route::get('/LogIn', function () {
    return view('LogIn');
});
Route::get('/Library', function () {
    return view('Library');
});
Route::get('/Catalog', function () {
    return view('Catalog');
});
Route::get('/Categ', function () {
    return view('Categ');
});

Route::get('/Auth', [maincontroller::class, 'auth']);
Route::post('/Auth/check', [maincontroller::class, 'auth_check']);