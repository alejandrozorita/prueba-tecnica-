<?php

namespace App\test;

use App\database\CreateTableJugador;
use App\Http\Models\Jugador;
use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class CreateTableJugadorTest extends BaseTest
{

    /** @test */
    public function crearTabla()
    {
        $this->startApp();
        $tabla = Jugador::createTable();
        $this->assertInstanceOf(CreateTableJugador::class, $tabla);

    }
}
