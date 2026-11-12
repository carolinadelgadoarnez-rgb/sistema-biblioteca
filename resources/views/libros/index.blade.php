
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestión de libros
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-6 rounded-lg shadow">

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold">
                        Lista de libros
                    </h3>

                    <a href="{{ route('libros.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + Registrar libro
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="p-3 border">Título</th>
                                <th class="p-3 border">Autor</th>
                                <th class="p-3 border">ISBN</th>
                                <th class="p-3 border">Categoría</th>
                                <th class="p-3 border">Cantidad</th>
                                <th class="p-3 border">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($libros as $libro)
                                <tr>
                                    <td class="p-3 border">
                                        {{ $libro->titulo }}
                                    </td>

                                    <td class="p-3 border">
                                        {{ $libro->autor }}
                                    </td>

                                    <td class="p-3 border">
                                        {{ $libro->isbn }}
                                    </td>

                                    <td class="p-3 border">
                                        {{ $libro->categoria }}
                                    </td>

                                    <td class="p-3 border">
                                        {{ $libro->cantidad }}
                                    </td>

                                    <td class="p-3 border">
                                        <div class="flex gap-2">
                                            <a href="{{ route('libros.show', $libro) }}"
                                               class="text-blue-600">
                                                Ver
                                            </a>

                                            <a href="{{ route('libros.edit', $libro) }}"
                                               class="text-green-600">
                                                Editar
                                            </a>

                                            <form action="{{ route('libros.destroy', $libro) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('¿Eliminar este libro?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="text-red-600">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-6 text-center text-gray-500">
                                        Todavía no hay libros registrados.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
