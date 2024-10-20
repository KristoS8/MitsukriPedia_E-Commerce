<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialiteLoginController;
use App\Http\Middleware\guest;
use App\Http\Middleware\login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/login', function () {
   return view('auth.login', ['title' => 'Login']); 
})->name('login')->middleware(login::class);

Route::get('/daftar', function () {
   return view('auth.daftar', ['title' => 'Register']); 
})->middleware(login::class);

Route::get('/books', [BooksController::class, 'index']);

Route::get('/gadget', function () {
   return view('gadget'); 
});

Route::get('/diamond', function () {
   return view('diamond');
});

Route::get('/dashboard', function (){
   return view('dashboard.dashboard');
})->name('dashboard')->middleware(guest::class);

// redirect to google
Route::get('auth/google', [SocialiteLoginController::class, 'redirectGoogle']);
Route::get('auth/google/callback', [SocialiteLoginController::class, 'callbackGoogle']);

// register
Route::post('/register', [RegisterController::class, 'store']);
// Auth Login
Route::post('/loginAuth', [LoginController::class , 'loginAuth']);
// logout
Route::post('/logout', [LoginController::class, 'logout']);