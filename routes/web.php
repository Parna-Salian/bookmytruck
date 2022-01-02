<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
    //Auth::routes(['verify' => true]);
    Route::get('/home', 'HomeController@index')->name('home');
    
    //Route::view('/index', 'home');
 
