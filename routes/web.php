<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketPlace;

    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
    //Auth::routes(['verify' => true]);
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/marketplace', 'MarketPlace@index')->name('marketplace');
    
    Route::view('/index', 'home');

    Route::get('/shipper', 'MarketPlace@enquiry')->name('shipper');
 
