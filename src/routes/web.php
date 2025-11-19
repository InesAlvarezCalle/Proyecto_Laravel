<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'blade.index')->name('blade.index');
Route::view('/about', 'blade.about')->name('blade.about');
Route::view('/servicios', 'blade.services')->name('blade.services');
Route::view('/contactos', 'blade.contact')->name('blade.contact');