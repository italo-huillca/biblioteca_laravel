<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{

    public function run(): void
    {
        Prestamo::factory(100)->create();
    }
}
