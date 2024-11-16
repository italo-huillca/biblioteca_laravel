<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'dni', 'direccion'];

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
