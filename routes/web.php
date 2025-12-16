<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
Route::get('/acerca', fn () => view('acerca'));
Route::get('/contacto', fn () => view('contacto'));
