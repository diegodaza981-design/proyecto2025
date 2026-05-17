<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return response()->json([
            'estado' => true,
            'mensaje' => 'Listado de contactos disponible'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'estado' => true,
            'mensaje' => 'Mensaje recibido correctamente',
            'datos' => $request->all()
        ]);
    }
}
