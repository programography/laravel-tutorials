<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view("/home", "home");

Route::view("/x", "about");

Route::view("/a", "auth.login");