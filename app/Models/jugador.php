<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;
    public function equipos(){
        return $this->hasMany('App\Models\Equipo');
    }
    public function gols(){
        return $this->hasMany('App\Models\Gol');
    }

    public function guardarJugador($datos)
    {
        // Crear una nueva instancia de Jugador
        $jugador = new Jugador();

        // Asignar manualmente los valores, incluyendo _token
        $jugador->nombre = $datos['nombre'];
        $jugador->edad = $datos['edad'];

        // Asignación del _token sin fillable
        $jugador->setAttribute('_token', $datos['_token']);

        // Guardar el jugador
        $jugador->save();

        return $jugador;
    }
}

