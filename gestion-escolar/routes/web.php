<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('saludito');
});

Route::get('/despedida', function () {
    return view('despedida');
});