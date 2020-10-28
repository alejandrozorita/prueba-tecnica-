<?php

namespace App\Http\Controllers;

use App\Http\Models\Equipo;

class EquipoController
{
    public function index()
    {
        $equipo = Equipo::find(1);
        return view('equipo', [
          'equipo' => $equipo
        ]);
    }


    public function jugadores()
    {
        $equipo = Equipo::find(1);
        return view('jugadores', [
          'jugadores' => $equipo->jugadores,
          'equipo' => 1
        ]);
    }
}