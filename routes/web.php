<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', 'crudController@contacts');
Route::get('/add', 'crudController@addContact');
