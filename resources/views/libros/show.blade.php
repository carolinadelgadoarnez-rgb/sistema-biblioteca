
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles del libro
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow">

                <h3 class="text-2xl font-bold mb-6">
                    {{ $libro->titulo }}
                </h3>

                <p class="mb-3"><strong>Autor:</strong> {{ $libro->autor }}</p>
                <p class="mb-3"><strong>ISBN:</strong> {{ $libro->isbn }}</p>
                <p class="mb-3"><strong>Categoría:</strong> {{ $libro->categoria }}</p>
                <p class="mb-3"><strong>Cantidad:</strong> {{ $libro->cantidad }}</p>
                <p class="mb-3"><strong>Editorial:</strong> {{ $libro->editorial ?? 'No especificada' }}</p>
                <p class="mb-6"><strong>Año de publicación:</strong> {{ $libro->anio_publicacion ?? 'No especificado' }}</p>

                <div class="flex gap-3">
                    <a href="{{ route('libros.edit', $libro) }}"
                       class="bg-green-600 text-white px-4 py-2 rounded">
                        Editar
                    </a>

                    <a href="{{ route('libros.index') }}"
                       class="bg-gray-300 text-gray-800 px-4 py-2 rounded">
                        Volver
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
