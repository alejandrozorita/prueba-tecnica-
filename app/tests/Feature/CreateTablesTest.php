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
class CreateTablesTest extends BaseTest
{

    /** @test */
    public function crearTabla()
    {
        $this->startApp();

        $tabla = User::createTable();
        $this->assertInstanceOf(CreateUserJugador::class, $tabla);

        $tabla = Jugador::createTable();
        $this->assertInstanceOf(CreateTableJugador::class, $tabla);

        $tabla = Equipo::createTable();
        $this->assertInstanceOf(CreateEquipoJugador::class, $tabla);

        $tabla = Mercado::createTable();
        $this->assertInstanceOf(CreateMercadoJugador::class, $tabla);

        $tabla = Presupuesto::createTable();
        $this->assertInstanceOf(CreatePresupuestoJugador::class, $tabla);

    }
}
