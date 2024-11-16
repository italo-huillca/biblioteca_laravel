@extends('layouts.app')

@section('content')
<h1>Lista de Préstamos</h1>
<a href="{{ route('prestamos.create') }}" class="btn btn-primary">Registrar nuevo préstamo</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Usuario</th>
            <th>Fecha Inicio</th>
            <th>Fecha Devolución</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($prestamos as $prestamo)
        <tr>
            <td>{{ $prestamo->id }}</td>
            <td>{{ $prestamo->libro->nombre }}</td>
            <td>{{ $prestamo->usuario->nombre }}</td>
            <td>{{ $prestamo->fecha_inicio }}</td>
            <td>{{ $prestamo->fecha_devolucion }}</td>
            <td>{{ $prestamo->estado }}</td>
            <td>
                <a href="{{ route('prestamos.edit', $prestamo->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('prestamos.destroy', $prestamo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No hay préstamos registrados.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
