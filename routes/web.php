<?php

use Illuminate\Support\Facades\Route;


Route::get('/','Query@show');
Route::get('/add','View@form')->name('form');

// untuk POST 

Route::post('/add','Query@insert');

// untuk DELETE 

Route::delete('/delete/{id}','Query@delete');