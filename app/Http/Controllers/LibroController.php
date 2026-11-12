<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    // Mostrar todos los libros
    public function index()
    {
        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    }

    // Mostrar formulario para registrar
    public function create()
    {
        return view('libros.create');
    }

    // Guardar un nuevo libro
    public function store(Request $request)
    {
        $datos = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'isbn' => 'required|string|max:255|unique:libros,isbn',
            'categoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'editorial' => 'nullable|string|max:255',
            'anio_publicacion' => 'nullable|integer|min:1000|max:9999',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'autor.required' => 'El autor es obligatorio.',
            'isbn.required' => 'El ISBN es obligatorio.',
            'isbn.unique' => 'Este ISBN ya está registrado.',
            'categoria.required' => 'La categoría es obligatoria.',
            'cantidad.required' => 'La cantidad es obligatoria.',
            'cantidad.integer' => 'La cantidad debe ser un número entero.',
            'cantidad.min' => 'La cantidad no puede ser negativa.',
            'anio_publicacion.integer' => 'El año debe ser un número entero.',
            'anio_publicacion.min' => 'El año no es válido.',
            'anio_publicacion.max' => 'El año no es válido.',
        ]);

        Libro::create($datos);

        return redirect()->route('libros.index')
            ->with('success', '¡Libro registrado correctamente!');
    }

    // Mostrar detalles de un libro
    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    // Mostrar formulario para editar
    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    // Actualizar un libro
    public function update(Request $request, Libro $libro)
    {
        $datos = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'isbn' => 'required|string|max:255|unique:libros,isbn,' . $libro->id,
            'categoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'editorial' => 'nullable|string|max:255',
            'anio_publicacion' => 'nullable|integer|min:1000|max:9999',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'autor.required' => 'El autor es obligatorio.',
            'isbn.required' => 'El ISBN es obligatorio.',
            'isbn.unique' => 'Este ISBN ya está registrado.',
            'categoria.required' => 'La categoría es obligatoria.',
            'cantidad.required' => 'La cantidad es obligatoria.',
            'cantidad.integer' => 'La cantidad debe ser un número entero.',
            'cantidad.min' => 'La cantidad no puede ser negativa.',
            'anio_publicacion.integer' => 'El año debe ser un número entero.',
            'anio_publicacion.min' => 'El año no es válido.',
            'anio_publicacion.max' => 'El año no es válido.',
        ]);

        $libro->update($datos);

        return redirect()->route('libros.index')
            ->with('success', '¡Libro actualizado correctamente!');
    }

    // Eliminar un libro
    public function destroy(Libro $libro)
    {
        $libro->delete();

        return redirect()->route('libros.index')
            ->with('success', '¡Libro eliminado correctamente!');
    }
}
