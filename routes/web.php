<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/login', function () {
   return view('auth.login'); 
});

Route::get('/daftar', function () {
   return view('auth.daftar'); 
});