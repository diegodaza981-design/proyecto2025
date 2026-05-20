<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Registra un nuevo usuario en el sistema.
     */
    public function register(Request $request): JsonResponse
    {
        // Validamos la información mínima para crear el usuario.
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Creamos el usuario y almacenamos la contraseña de forma segura.
        $user = User::create($validated);

        return response()->json([
            'mensaje' => 'Registro exitoso.',
            'usuario' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
        ], 201);
    }

    /**
     * Valida el inicio de sesión del usuario con su usuario y contraseña.
     */
    public function login(Request $request): JsonResponse
    {
        // Se solicita "usuario" (correo o nombre) y "password" para autenticación.
        $credentials = $request->validate([
            'usuario' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Permitimos iniciar sesión usando email o nombre de usuario.
        $user = User::query()
            ->where('email', $credentials['usuario'])
            ->orWhere('name', $credentials['usuario'])
            ->first();

        // Si no existe el usuario o la contraseña no coincide, se devuelve error.
        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'mensaje' => 'Error en la autenticación.',
            ], 401);
        }

        return response()->json([
            'mensaje' => 'Autenticación satisfactoria.',
        ]);
    }
}
