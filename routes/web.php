<?php

use App\Http\Controllers\AIcontroller;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [maincontroller::class, 'home'])->name('home');
Route::get('/gift/{id}', [dbcontroller::class, 'gift_page'])->name('show_gift');
Route::post('/results', [dbcontroller::class, 'get'])->name('db_out');
Route::get('/Giftiks/db', [dbcontroller::class, 'submit'])->name('dbpush');
Route::post('/Giftiks/get-description', [AIcontroller::class, 'TagGen'])->name('YATAG');
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