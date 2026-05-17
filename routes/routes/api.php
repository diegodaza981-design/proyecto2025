<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/contactos', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'store']);
