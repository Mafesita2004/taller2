<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = equipo::all();
        return view ('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'estadio' => 'required|string',
            'ciudad' => 'required|string',
            'aforo' => 'required|integer',
            'anio' => 'required|integer',
            '_token' => 'required|string', // Añadir validación para _token si es necesario
        ]);

        // Crear equipo y asignar campos individualmente
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->estadio = $request->estadio;
        $equipo->ciudad = $request->ciudad;
        $equipo->aforo = $request->aforo;
        $equipo->anio = $request->anio;
        $equipo->setAttribute('_token', $request->_token); // Asignar _token

        $equipo->save();

        return redirect()->route('equipos.index');

    }

    public function show(equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required|string',
            'estadio' => 'required|string',
            'ciudad' => 'required|string',
            'aforo' => 'required|integer',
            'anio' => 'required|integer',
            '_token' => 'required|string',
        ]);


        $equipo->nombre = $request->nombre;
        $equipo->estadio = $request->estadio;
        $equipo->ciudad = $request->ciudad;
        $equipo->aforo = $request->aforo;
        $equipo->anio = $request->anio;
        $equipo->setAttribute('_token', $request->_token);

        $equipo->save();

        return redirect()->route('equipos.index');
    }

    public function destroy(equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index');
    }
}
