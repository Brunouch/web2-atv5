<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('templates.main')-> with('titulo', "");
})->nome('indice');

Route::resource('clientes', 'ClienteController');