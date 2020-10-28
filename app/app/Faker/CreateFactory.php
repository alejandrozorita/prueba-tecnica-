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


    public function __construct()
    {
        $this->faker = Factory::create();
        $this->num_jugadores_aleatorios = $this->faker->randomNumber(2);
    }


    public function createFactoryJugador($attributes = [])
    {
        return ModelFactory::jugador([
          'nombre' => $attributes['nombre'] ?? $this->faker->name,
          'imagen' => $attributes['imagen'] ?? $this->faker->imageUrl($width = 640, $height = 480),
          'equipo_id' => $attributes['equipo_id'] ?? null,
          'precio' => $attributes['precio'] ?? $this->faker->randomNumber(3),
          'agilidad' => $attributes['agilidad'] ?? $this->faker->randomNumber(2),
          'fuerza' => $attributes['fuerza'] ?? $this->faker->randomNumber(2),
          'suerte' => $attributes['suerte'] ?? $this->faker->randomNumber(2),
        ]);
    }


    public function createFactoryEquipo($attributes = [])
    {
        $max = $this->faker->randomNumber(2);
        return ModelFactory::equipo([
          'nombre' => $attributes['nombre'] ?? $this->faker->name,
          'max_jugadores' => $attributes['max_jugadores'] ?? $max,
          'min_jugadores' => $attributes['min_jugadores'] ?? $max - $this->faker->randomNumber(1),
          'user_id' => $attributes['user_id'] ?? 1,
        ]);
    }

    public function createFactoryUser($attributes = [])
    {
        return ModelFactory::user([
          'nombre' => $attributes['nombre'] ?? $this->faker->name,
          'email' => $attributes['email'] ?? $this->faker->email,
        ]);
    }


    public function createFactoryPresupuesto($attributes = [])
    {
        return ModelFactory::presupuesto([
          'equipo_id' => $attributes['equipo_id'] ?? 1,
          'presupuesto' => $attributes['presupuesto'] ?? $this->faker->randomNumber(5),
        ]);
    }


    public function createFactoryMercado($attributes = [])
    {
        $max = $this->faker->randomNumber(3);
        return ModelFactory::mercado([
          'num_jugadores_aleatorios' => $attributes['num_jugadores_aleatorios'] ?? $this->faker->randomNumber(1),
          'max_precio' => $attributes['max_precio'] ?? $max,
          'min_precio' => $attributes['min_precio'] ?? $max - $this->faker->randomNumber(1),
        ]);

    }

}