<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();
//Auth::routes(['verify' => true]);


Route::view('/index', 'home');