<?php

use Faker\Factory;

class CreateFactory
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    private $nombre, $imagen, $precio, $agilidad, $fuerza, $suerte, $num_jugadores, $email, $presupuesto;


    public function __construct()
    {
        $this->faker = Factory::create();
        $this->nombre = $this->faker->name;
        $this->imagen = $this->faker->imageUrl($width = 640, $height = 480);
        $this->precio = $this->faker->randomNumber(3);
        $this->agilidad = $this->faker->randomNumber(2);
        $this->fuerza = $this->faker->randomNumber(2);
        $this->suerte = $this->faker->randomNumber(2);
        $this->num_jugadores = $this->faker->randomNumber(2);
        $this->email = $this->faker->email;
        $this->presupuesto = $this->faker->randomNumber(5);
    }


    public function createFactoryJugador($attributes = [])
    {
        $this->nombre = $attributes['nombre'] ?? $this->nombre;
        $this->imagen = $attributes['imagen'] ?? $this->imagen;
        $this->precio = $attributes['precio'] ?? $this->precio;
        $this->agilidad = $attributes['agilidad'] ?? $this->agilidad;
        $this->fuerza = $attributes['fuerza'] ?? $this->fuerza;
        $this->suerte = $attributes['suerte'] ?? $this->suerte;
        return new JugadorFactory($this->nombre, $this->imagen, $this->precio, $this->agilidad, $this->fuerza, $this->suerte);
    }


    public function createFactoryEquipo($attributes = [])
    {
        $this->nombre = $attributes['nombre'] ?? $this->nombre;
        $this->num_jugadores = $attributes['num_jugadores'] ?? $this->num_jugadores;
        return new EquipoFactory($this->nombre, $this->num_jugadores);
    }

    public function createFactoryUser($attributes = [])
    {
        $this->nombre = $attributes['nombre'] ?? $this->nombre;
        $this->email = $attributes['email'] ?? $this->email;
        return new UserFactory($this->nombre, $this->email);
    }


    public function createFactoryPresupuesto($attributes = [])
    {
        $this->presupuesto = $attributes['presupuesto'] ?? $this->presupuesto;
        $equipo_id = $attributes['equipo_id'] ?? $this->createFactoryEquipo()->id;
        return new PresupuestoFactory($this->presupuesto, $equipo_id);
    }



}