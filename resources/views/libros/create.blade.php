
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar nuevo libro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-6">

                <h3 class="text-lg font-bold mb-6">
                    Datos del libro
                </h3>

                {{-- Mensajes de error --}}
                @if ($errors->any())
                    <div class="mb-4 rounded-lg bg-red-100 p-4 text-red-700">
                        <strong>Hay errores en el formulario:</strong>
                        <ul class="list-disc ml-5 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('libros.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Título</label>
                        <input type="text" name="titulo"
                            value="{{ old('titulo') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Autor</label>
                        <input type="text" name="autor"
                            value="{{ old('autor') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">ISBN</label>
                        <input type="text" name="isbn"
                            value="{{ old('isbn') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Categoría</label>
                        <input type="text" name="categoria"
                            value="{{ old('categoria') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Cantidad</label>
                        <input type="number" name="cantidad"
                            value="{{ old('cantidad') }}"
                            min="0"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Editorial (opcional)</label>
                        <input type="text" name="editorial"
                            value="{{ old('editorial') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="mb-6">
                        <label class="block font-medium mb-1">Año de publicación (opcional)</label>
                        <input type="number" name="anio_publicacion"
                            value="{{ old('anio_publicacion') }}"
                            min="1000" max="9999"
                            class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <div class="flex items-center gap-3">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md">
                            Guardar libro
                        </button>

                        <a href="{{ route('libros.index') }}"
                            class="text-gray-600 hover:text-gray-900">
                            Cancelar
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
