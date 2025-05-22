<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // view is the folder , welcome is name of file
    return view('welcome');
});

Route::get('/ninjas',function(){
    return view('ninjas.index');
});