@extends('layouts.app')

@section('content')
<h1>Registrar Préstamo</h1>
<form action="{{ route('prestamos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="usuario_id">Usuario:</label>
        <select name="usuario_id" id="usuario_id" class="form-control">
            @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="libro_id">Libro:</label>
        <select name="libro_id" id="libro_id" class="form-control">
            @foreach ($libros as $libro)
            <option value="{{ $libro->id }}">{{ $libro->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="fecha_inicio">Fecha Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control">
    </div>

    <div class="form-group">
        <label for="fecha_devolucion">Fecha Devolución:</label>
        <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection
