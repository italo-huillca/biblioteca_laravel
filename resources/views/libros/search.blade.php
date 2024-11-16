@extends('layouts.app')

@section('content')
<h1>Buscar Libros</h1>
<form action="{{ route('libros.search') }}" method="GET">
    <input type="text" name="query" placeholder="Buscar libros por nombre, autor o editorial" class="form-control">
    <button type="submit" class="btn btn-primary mt-2">Buscar</button>
</form>

@if(isset($libros))
<h2>Resultados de la búsqueda:</h2>
<ul>
    @forelse($libros as $libro)
    <li>{{ $libro->nombre }} - {{ $libro->autor }} ({{ $libro->editorial }})</li>
    @empty
    <li>No se encontraron libros disponibles.</li>
    @endforelse
</ul>
@endif
@endsection
