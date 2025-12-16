@extends('layouts.app')

@section('title', 'Inicio')

@section('contenido')
<div class="flex flex-col items-center justify-center min-h-[70vh] text-center gap-6">

    <div class="bg-black/35 backdrop-blur-sm border border-white/10 rounded-3xl p-10 w-full max-w-3xl">
        <h2 class="text-5xl md:text-6xl font-extrabold tracking-tight">
            Bienvenidos a mi proyecto 2025
        </h2>

        <p class="text-xl md:text-2xl text-gray-200 mt-4">
            Esta es la página de inicio
        </p>
    </div>

    <div class="mt-8">
        @include('partials.building')
    </div>

</div>
@endsection
