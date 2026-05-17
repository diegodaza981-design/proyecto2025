@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-4xl rounded-3xl border border-white/10 bg-white/5 p-10 shadow-2xl">
    <h1 class="text-4xl font-bold">Contacto</h1>
    <p class="mt-4 text-white/80">Formulario visual conectado a API REST.</p>

    <form id="contactoForm" class="mt-8 space-y-5">
        <div>
            <label class="block text-sm font-semibold">Nombre</label>
            <input 
                id="nombre"
                type="text"
                required
                class="mt-2 w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-white placeholder-white/40 outline-none"
                placeholder="Tu nombre">
        </div>

        <div>
            <label class="block text-sm font-semibold">Correo</label>
            <input 
                id="correo"
                type="email"
                required
                class="mt-2 w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-white placeholder-white/40 outline-none"
                placeholder="tu@correo.com">
        </div>

        <div>
            <label class="block text-sm font-semibold">Mensaje</label>
            <textarea 
                id="mensaje"
                required
                class="mt-2 h-32 w-full resize-none rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-white placeholder-white/40 outline-none"
                placeholder="Escribe aquí..."></textarea>
        </div>

        <button 
            type="submit"
            class="rounded-xl bg-white px-6 py-3 font-semibold text-black">
            Enviar
        </button>
    </form>

    <div id="respuesta" class="mt-6 text-sm font-medium text-green-400"></div>
</div>

<script>
document.getElementById("contactoForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    const datos = {
        nombre: document.getElementById("nombre").value,
        correo: document.getElementById("correo").value,
        mensaje: document.getElementById("mensaje").value
    };

    try {
        const response = await fetch("/api/contacto", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify(datos)
        });

        const resultado = await response.json();

        document.getElementById("respuesta").innerHTML = resultado.mensaje;

        document.getElementById("contactoForm").reset();

    } catch (error) {
        document.getElementById("respuesta").innerHTML = "Error al enviar el mensaje.";
    }
});
</script>
@endsection
