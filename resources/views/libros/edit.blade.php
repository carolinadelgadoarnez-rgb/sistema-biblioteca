
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar libro
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow">

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('libros.update', $libro) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Título</label>
                        <input type="text" name="titulo"
                               value="{{ old('titulo', $libro->titulo) }}"
                               class="w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Autor</label>
                        <input type="text" name="autor"
                               value="{{ old('autor', $libro->autor) }}"
                               class="w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">ISBN</label>
                        <input type="text" name="isbn"
                               value="{{ old('isbn', $libro->isbn) }}"
                               class="w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Categoría</label>
                        <input type="text" name="categoria"
                               value="{{ old('categoria', $libro->categoria) }}"
                               class="w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Cantidad</label>
                        <input type="number" name="cantidad"
                               value="{{ old('cantidad', $libro->cantidad) }}"
                               min="0" class="w-full border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Editorial (opcional)</label>
                        <input type="text" name="editorial"
                               value="{{ old('editorial', $libro->editorial) }}"
                               class="w-full border-gray-300 rounded-md">
                    </div>

                    <div class="mb-6">
                        <label class="block font-medium mb-1">Año de publicación (opcional)</label>
                        <input type="number" name="anio_publicacion"
                               value="{{ old('anio_publicacion', $libro->anio_publicacion) }}"
                               min="1000" max="9999"
                               class="w-full border-gray-300 rounded-md">
                    </div>

                    <div class="flex gap-3">
                        <button type="submit"
                                class="bg-blue-600 text-white px-5 py-2 rounded">
                            Actualizar libro
                        </button>

                        <a href="{{ route('libros.index') }}"
                           class="bg-gray-300 text-gray-800 px-5 py-2 rounded">
                            Cancelar
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
