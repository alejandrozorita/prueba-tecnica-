<?php

namespace Tests;

use App\Faker\CreateFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class TestsCase
 *
 * @package Tests
 */
abstract class BaseTest extends TestCase
{
    /**
     * @var CreateFactory
     */
    public CreateFactory $fakerMethod;

    protected $numJugadoresAleatorios, $precioMax, $precioMin;

    public function startApp()
    {
        require __DIR__ . '/../vendor/autoload.php';
        require_once __DIR__.'/../bootstrap/app.php';
        $this->fakerMethod = new CreateFactory();
    }

    /**
     * @return \App\Http\Models\Mercado
     */
    protected function crearMercado()
    {
        $this->startApp();

        $this->numJugadoresAleatorios = 10;
        $this->precioMax = 4000;
        $this->precioMin = 3000;

        return $this->fakerMethod->createFactoryMercado([
          'num_jugadores_aleatorios' => $this->numJugadoresAleatorios,
          'max_precio' => $this->precioMax,
          'min_precio' => $this->precioMin
        ]);
    }
}
