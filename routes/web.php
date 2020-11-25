<?php

use Illuminate\Support\Facades\Route;


Route::get('/','Query@show');
Route::get('/add','View@form')->name('form');
Route::get('/change/{id}','Query@put');

// untuk POST 
Route::post('/add','Query@insert');

// untuk DELETE 
Route::delete('/delete/{id}','Query@delete');

 // untuk PUT
 Route::put('/change/{id}','Query@update');