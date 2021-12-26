<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/login', 'Auth\LoginController@getLogin');
Auth::routes();
Auth::routes(['verify' => true]);