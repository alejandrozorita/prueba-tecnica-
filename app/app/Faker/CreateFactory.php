<?php

namespace App\Faker;

use App\Http\Factory\ModelFactory;
use Faker\Factory;

/**
 * Class CreateFactory
 */
class CreateFactory
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    private $nombre, $imagen, $precio, $agilidad, $fuerza, $suerte, $max_jugadores, $min_jugadores, $email, $presupuesto;


    public function __construct()
    {
        $this->faker = Factory::create();
        $this->nombre = $this->faker->name;
        $this->imagen = $this->faker->imageUrl($width = 640, $height = 480);
        $this->precio = $this->faker->randomNumber(3);
        $this->agilidad = $this->faker->randomNumber(2);
        $this->fuerza = $this->faker->randomNumber(2);
        $this->suerte = $this->faker->randomNumber(2);
        $this->max_jugadores = $this->faker->randomNumber(2);
        $this->min_jugadores = $this->max_jugadores - $this->faker->randomNumber(1);
        $this->email = $this->faker->email;
        $this->presupuesto = $this->faker->randomNumber(5);
    }


    public function createFactoryJugador($attributes = [])
    {
        return ModelFactory::jugador([
            'nombre' => $attributes['nombre'] ?? $this->nombre,
            'imagen' => $attributes['imagen'] ?? $this->imagen,
            'precio' => $attributes['precio'] ?? $this->precio,
            'agilidad' => $attributes['agilidad'] ?? $this->agilidad,
            'fuerza' => $attributes['fuerza'] ?? $this->fuerza,
            'suerte' => $attributes['suerte'] ?? $this->suerte,
        ]);
    }


    public function createFactoryEquipo($attributes = [])
    {
        return ModelFactory::equipo([
          'nombre' => $attributes['nombre'] ?? $this->nombre,
          'max_jugadores' => $attributes['max_jugadores'] ?? $this->max_jugadores,
          'min_jugadores' => $attributes['min_jugadores'] ?? $this->min_jugadores,
          'user_id' => $attributes['user_id'] ?? $this->createFactoryUser()->id,
        ]);
    }

    public function createFactoryUser($attributes = [])
    {
        return ModelFactory::user([
          'nombre' => $attributes['nombre'] ?? $this->nombre,
          'email' => $attributes['email'] ?? $this->email,
        ]);
    }


    public function createFactoryPresupuesto($attributes = [])
    {
        return ModelFactory::presupuesto([
          'equipo_id' => $attributes['equipo_id'] ?? $this->createFactoryEquipo()->id,
          'presupuesto' => $attributes['presupuesto'] ?? $this->presupuesto,
        ]);
    }



}