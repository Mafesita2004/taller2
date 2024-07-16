<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JugadorController;
use App\Http\Controllers\EquipoController;

// Rutas para Jugadores
Route::get('jugadores', [JugadorController::class, 'index'])->name('jugadores.index');
Route::get('jugadores/create', [JugadorController::class, 'create'])->name('jugadores.create');
Route::post('jugadores', [JugadorController::class, 'store'])->name('jugadores.store');
Route::get('jugadores/{jugador}', [JugadorController::class, 'show'])->name('jugadores.show');
Route::get('jugadores/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');
Route::put('jugadores/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::delete('jugadores/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');

// Rutas para Equipos
Route::get('equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
Route::get('equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

