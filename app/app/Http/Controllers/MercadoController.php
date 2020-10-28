<?php

namespace App\Http\Controllers;

use App\Http\Factory\ModelFactory;
use App\Http\Models\Equipo;
use App\Http\Models\Jugador;

/**
 * Class MercadoController
 *
 * @package App\Http\Controllers
 */
class MercadoController
{
    /**
     * @return \App\Http\Response
     */
    public function index()
    {
        $mercado = ModelFactory::mercado([
          'num_jugadores_aleatorios' => 10,
          'max_precio' => 800,
          'min_precio' => 100
        ]);

        return view('mercado', [
          'jugadores' => $mercado->getJugadores(),
          'equipo' => 1
        ]);
    }


    public function contratar()
    {
        [$jugador, $equipo] = $this->validarContratar($_GET['jugador_id'], $_GET['equipo_id']);

        $jugador->update([
          'equipo_id' => $equipo->id
        ]);

        die("Ha contratado a $jugador->nombre por $jugador->precio. 
          <a href='http://localhost/mercado/index'>Seguir comprando</a> | <a href='http://localhost/equipo/index'>Ver mi equipo</a>");
    }


    public function despedir()
    {
        [$jugador, $equipo] = $this->validarDespedir($_GET['jugador_id'], $_GET['equipo_id']);

        $jugador->update([
          'equipo_id' => null
        ]);

        die("El jugador $jugador->nombre ha sido despedido. 
          <a href='http://localhost/mercado/index'>Ir a comprar</a> | <a href='http://localhost/equipo/jugadores'>Ver mis jugadores</a>");
    }


    private function validarDespedir($jugador_id, $equipo_id)
    {
        if ( ! $jugador_id || ! $equipo_id) {
            die("No ha seleccionado jugador o equipo, <a href='http://localhost/mercado/index'>Voler</a>");
        }
        $jugador = Jugador::find($jugador_id);
        $equipo = Equipo::find($equipo_id);
        $jugadoresMinimos = $equipo->getMinJugadores();
        $jugadoresActuales = $equipo->jugadores->count();

        if ( ! $jugador || ! $equipo) {
            die("No hemos encontrado el jugador o equipo, <a href='http://localhost/mercado/index'>Voler</a>");
        }

        if ( $jugadoresActuales <= $jugadoresMinimos ) {
            die("Ya no puede despedir más jugadores, <a href='http://localhost/mercado/index'>Voler</a>");
        }

        return [$jugador, $equipo];
    }


    private function validarContratar($jugador_id, $equipo_id)
    {
        if ( ! $jugador_id || ! $equipo_id) {
            die("No ha seleccionado jugador o equipo, <a href='http://localhost/mercado/index'>Voler</a>");
        }

        $jugador = Jugador::find($jugador_id);
        $equipo = Equipo::find($equipo_id);
        $capacidadEndeudamiento = $equipo->presupuesto->validarCompra($jugador);
        $jugadoresMaximos = $equipo->getMaxJugadores();
        $jugadoresActuales = $equipo->jugadores->count();


        if ( ! $jugador || ! $equipo) {
            die("No hemos encontrado el jugador o equipo, <a href='http://localhost/mercado/index'>Voler</a>");
        }

        if ( ! $capacidadEndeudamiento) {
            die("Ya no puede contratar más jugadores, <a href='http://localhost/mercado/index'>Voler</a>");
        }

        if ( $jugadoresActuales >= $jugadoresMaximos ) {
            die("Ya no puede contratar más jugadores, <a href='http://localhost/mercado/index'>Voler</a>");
        }

        return [$jugador, $equipo];
    }

}