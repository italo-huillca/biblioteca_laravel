<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Usuario;
use App\Models\Prestamo;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::with('libro', 'usuario')->get();
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        $libros = Libro::where('disponible', true)->get();
        $usuarios = Usuario::all();
        return view('prestamos.create', compact('libros', 'usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'libro_id' => 'required|exists:libros,id',
            'fecha_inicio' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_inicio',
        ]);

        $libro = Libro::find($request->libro_id);
        if (!$libro->disponible) {
            return back()->withErrors(['libro_id' => 'El libro no está disponible.']);
        }

        $prestamo = Prestamo::create($request->all());
        $libro->update(['disponible' => false]);

        return redirect()->route('prestamos.index')->with('success', 'Préstamo registrado correctamente.');
    }

    public function edit(Prestamo $prestamo)
    {
        return view('prestamos.edit', compact('prestamo'));
    }

    public function update(Request $request, Prestamo $prestamo)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,devuelto',
        ]);

        $prestamo->update($request->all());
        if ($request->estado === 'devuelto') {
            $prestamo->libro->update(['disponible' => true]);
        }

        return redirect()->route('prestamos.index')->with('success', 'Préstamo actualizado correctamente.');
    }

    public function destroy(Prestamo $prestamo)
    {
        if ($prestamo->estado === 'pendiente') {
            $prestamo->libro->update(['disponible' => true]);
        }
        $prestamo->delete();

        return redirect()->route('prestamos.index')->with('success', 'Préstamo eliminado correctamente.');
    }
}