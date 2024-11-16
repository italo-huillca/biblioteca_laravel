<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Libro;
use App\Models\Usuario;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'libro_id', 'fecha_inicio', 'fecha_devolucion', 'estado'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
