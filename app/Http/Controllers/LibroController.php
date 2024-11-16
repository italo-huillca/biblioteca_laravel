<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;


class LibroController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        $libros = Libro::where('nombre', 'like', "%{$query}%")
                       ->orWhere('autor', 'like', "%{$query}%")
                       ->orWhere('editorial', 'like', "%{$query}%")
                       ->where('disponible', true)
                       ->get();
    
        return view('libros.search', compact('libros'));
    }
}
