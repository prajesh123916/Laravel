<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "Welcome to PythonCodeVerse";
});

Route::post('/submit', function(){
    return view('helloworld');
});

Route::put('/update', function(){
    return view('helloworld');
});
