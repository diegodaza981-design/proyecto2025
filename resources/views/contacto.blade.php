@extends('layouts.app')

@section('title', 'Contacto')

@section('contenido')
<div class="bg-black/35 backdrop-blur-sm border border-white/10 rounded-3xl p-10">
    <h2 class="text-4xl font-bold mb-3">Contacto</h2>
    <p class="text-gray-200 mb-6">Formulario visual (todavía no envía).</p>

    <form class="space-y-4 max-w-xl">
        <div>
            <label class="block text-sm font-medium text-gray-200">Nombre</label>
            <input type="text" class="mt-1 w-full rounded-xl p-3 bg-black/30 border border-white/10 text-white" placeholder="Tu nombre">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-200">Correo</label>
            <input type="email" class="mt-1 w-full rounded-xl p-3 bg-black/30 border border-white/10 text-white" placeholder="tu@correo.com">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-200">Mensaje</label>
            <textarea rows="4" class="mt-1 w-full rounded-xl p-3 bg-black/30 border border-white/10 text-white" placeholder="Escribe aquí..."></textarea>
        </div>

        <button type="button" class="rounded-xl px-5 py-3 font-semibold bg-white text-black hover:opacity-90">
            Enviar
        </button>
    </form>
</div>
@endsection
