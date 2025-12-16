@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-4xl rounded-3xl border border-white/10 bg-white/5 p-10 text-center shadow-2xl">
    <h1 class="text-5xl font-extrabold tracking-tight">Bienvenido a mi proyecto final</h1>
    <p class="mt-4 text-lg text-white/80">Proyecto 2025. Laravel + Tailwind.</p>
</div>

<div class="mt-10 flex justify-center">
    @include('partials.building')
</div>
@endsection
