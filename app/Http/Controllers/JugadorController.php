<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    public function create()
    {
        return view('jugadores.create');
    }

    public function store(Request $request)
    {
         // Validación de datos (puedes ajustar las reglas según necesites)
         $request->validate([
            'nombre' => 'required|string',
            'posicion' => 'required|string',
            'fecha_nac' => 'required|date',
        ]);

        // Crear jugador y asignar campos individualmente
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->fecha_nac = $request->fecha_nac;
        $jugador->save();

        return redirect()->route('jugadores.index');

    }
    public function show(Jugador $jugador)
    {
        return view('jugadores.show', compact('jugador'));
    }

    public function edit(Jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    public function update(Request $request, Jugador $jugador)
    {
         // Validación de datos (puedes ajustar las reglas según necesites)
         $request->validate([
            'nombre' => 'required|string',
            'posicion' => 'required|string',
            'fecha_nac' => 'required|date',
        ]);

        // Actualizar jugador y asignar campos individualmente
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->fecha_nac = $request->fecha_nac;
        $jugador->save();

        return redirect()->route('jugadores.index');
    }
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadores.index');
    }
}

