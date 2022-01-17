<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Web Routes

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]], function () {
    Route::get('/', function (){
        return view('dashboard');
    });
});

