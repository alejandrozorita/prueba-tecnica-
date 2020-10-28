<?php

namespace App\Http\Models;

use App\Faker\CreateFactory;

/**
 * Class Mercado
 *
 * @package App\Http\Models
 */
class Mercado
{
    private $numJugadoresAleatorios;
    private $maxPrecio;
    private $minPrecio;
    private $jugadores;

    public function __construct(array $attributes = [])
    {
        $this->numJugadoresAleatorios = $attributes['num_jugadores_aleatorios'] ?? rand(6, 15);
        $this->maxPrecio = $attributes['max_precio'] ?? rand(500, 1000);
        $this->minPrecio = $attributes['min_precio'] ?? rand(300, 499);
        $this->jugadores = [];
        $this->iniciarMercado();
    }


    /**
     * @return mixed
     */
    public function getNumJugadoresAleatorios()
    {
        return $this->numJugadoresAleatorios;
    }


    /**
     * @param  mixed  $numJugadoresAleatorios
     */
    public function setNumJugadoresAleatorios($numJugadoresAleatorios): void
    {
        $this->numJugadoresAleatorios = $numJugadoresAleatorios;
    }


    /**
     * @return mixed
     */
    public function getMaxPrecio()
    {
        return $this->maxPrecio;
    }


    /**
     * @param  mixed  $maxPrecio
     */
    public function setMaxPrecio($maxPrecio): void
    {
        $this->maxPrecio = $maxPrecio;
    }


    /**
     * @return mixed
     */
    public function getMinPrecio()
    {
        return $this->minPrecio;
    }


    /**
     * @param  mixed  $minPrecio
     */
    public function setMinPrecio($minPrecio): void
    {
        $this->minPrecio = $minPrecio;
    }


    /**
     * @return array
     */
    public function getJugadores(): array
    {
        return $this->jugadores;
    }


    private function iniciarMercado()
    {
        $fakerMethod = new CreateFactory();
        for ($i = 0; $i < $this->numJugadoresAleatorios; $i++) {
            $jugador = $fakerMethod->createFactoryJugador();
            $jugador->save();
            array_push($this->jugadores, $jugador);
        }
    }

}
