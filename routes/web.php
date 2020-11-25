<?php

use Illuminate\Support\Facades\Route;


Route::get('/','View@index');
Route::get('/add','View@form')->name('form');

// untuk POST 

Route::post('/add','Query@insert');