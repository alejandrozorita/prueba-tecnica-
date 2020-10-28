<?php

namespace App\Http\Controllers;

use App\Faker\CreateFactory;
use App\Http\Models\Equipo;
use App\Http\Models\Presupuesto;
use App\Http\Models\User;

class HomeController
{
    public function index()
    {
        try {
            return view('home', [
              'user' => User::first(),
              'equipo' => Equipo::first(),
              'presupuesto' => Presupuesto::first()
            ]);
        } catch (\Exception $e) {
            return view('home', [
              'baseDatos' => true
            ]);
        }
    }


    public function crearUsuario()
    {
        $factory = new CreateFactory();
        $usuario = $factory->createFactoryUser();
        $usuario->save();

        die("Su usuario se ha creado:  $usuario->nombre creado . <a href='http://localhost/home/index'>Ir a la home</a>");
    }


    public function crearEquipo()
    {
        $factory = new CreateFactory();
        $equipo = $factory->createFactoryEquipo();
        $equipo->save();

        die("Equipo $equipo->nombre creado . <a href='http://localhost/home/index'>Ir a la home</a>");
    }


    public function crearPresupuesto()
    {
        $factory = new CreateFactory();
        $presupuesto = $factory->createFactoryPresupuesto();
        $presupuesto->save();

        die("Presupuesto creado:  $presupuesto->presupuesto . <a href='http://localhost/home/index'>Ir a la home</a>");
    }

}