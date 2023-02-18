<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('admin');
Route::view('/prin', 'inicio')->name('principal');
Route::view('/gato', 'gatos')->name('gatos');
Route::view('/perro', 'perros')->name('perros');
Route::view('/protect', 'protector')->name('protector');