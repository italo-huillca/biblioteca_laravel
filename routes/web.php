<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrestamoController;

Route::get('/prestamos', [PrestamoController::class, 'index'])->name('prestamos.index');

Route::get('/prestamos/create', [PrestamoController::class, 'create'])->name('prestamos.create');

Route::post('/prestamos', [PrestamoController::class, 'store'])->name('prestamos.store');

Route::get('/prestamos/{prestamo}/edit', [PrestamoController::class, 'edit'])->name('prestamos.edit');

Route::put('/prestamos/{prestamo}', [PrestamoController::class, 'update'])->name('prestamos.update');

Route::delete('/prestamos/{prestamo}', [PrestamoController::class, 'destroy'])->name('prestamos.destroy');
