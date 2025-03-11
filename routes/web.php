<?php

use App\Http\Controllers\AIcontroller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\maincontroller;
use App\Http\Middleware\UserIsAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', [maincontroller::class, 'home'])->name('home');
Route::get('/categ', [maincontroller::class, 'category'])->name('Categories');

Route::get('/gift/{id}', [dbcontroller::class, 'gift_page'])->name('show_gift');
Route::get('/search', [dbcontroller::class, 'gift_search'])->name('search');
Route::get('/Giftiks/db', [dbcontroller::class, 'submit'])->name('dbpush');

Route::post('/gift_search', [AIcontroller::class, 'TagGen'])->name('YATAG');

Route::get('/library', [ArticleController::class, 'articles_main_page']);
Route::get('/article/{id}', [ArticleController::class, 'article_page'])->name('show_article');

Route::get('/favorite', [maincontroller::class, 'fav'])->middleware(UserIsAuth::class);

Route::get('/reg', [RegisterController::class, 'create'])->name('register');
Route::post('/reg', [RegisterController::class, 'store'])->name('reg');
Route::post('/auth', [LoginController::class, 'store'])->name('auth');
Route::post('/check-email', [RegisterController::class, 'checkEmail'])->name('check.email');


Route::get('/Auth', [maincontroller::class, 'auth']);
Route::post('/Auth/check', [maincontroller::class, 'auth_check']);