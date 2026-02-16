<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Endpoint para registrar nuevos usuarios.
Route::post('/registro', [AuthController::class, 'register']);

// Endpoint para validar credenciales en el inicio de sesión.
Route::post('/inicio-sesion', [AuthController::class, 'login']);
