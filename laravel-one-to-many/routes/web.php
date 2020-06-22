<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index') ->name('home');
Route::get('/edit{id}', 'PostController@edit') ->name('edit-post'); 
