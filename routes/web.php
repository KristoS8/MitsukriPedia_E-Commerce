<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\SocialiteLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/login', function () {
   return view('auth.login', ['title' => 'Login']); 
});

Route::get('/daftar', function () {
   return view('auth.daftar', ['title' => 'Register']); 
});

Route::get('/books', [BooksController::class, 'index']);

Route::get('/gadget', function () {
   return view('gadget'); 
});

Route::get('/diamond', function () {
   return view('diamond');
});

Route::get('/dashboard', function (){
   return view('dashboard.dashboard');
});

// redirect to google
Route::get('auth/google', [SocialiteLoginController::class, 'redirectGoogle']);
Route::get('auth/google/callback', [SocialiteLoginController::class, 'callbackGoogle']);