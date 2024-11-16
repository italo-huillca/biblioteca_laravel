@extends('layouts.app')

@section('content')
<h1>Editar Préstamo</h1>
<form action="{{ route('prestamos.update', $prestamo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="estado">Estado:</label>
        <select name="estado" id="estado" class="form-control">
            <option value="pendiente" {{ $prestamo->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="devuelto" {{ $prestamo->estado == 'devuelto' ? 'selected' : '' }}>Devuelto</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
