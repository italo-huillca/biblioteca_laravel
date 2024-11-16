<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Prestamo;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'autor', 'editorial', 'anio', 'disponible'];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
