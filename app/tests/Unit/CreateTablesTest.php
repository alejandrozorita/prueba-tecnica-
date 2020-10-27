<?php

namespace Tests\Unit;

use App\database\CreateTableEquipo;
use App\database\CreateTableJugador;
use App\database\CreateTablePresupuesto;
use App\database\CreateTableUser;
use App\Http\Factory\ModelFactory;
use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class CreateTablesTest extends BaseTest
{

    /** @test */
    public function crearTablas()
    {
        $this->startApp();

        $tabla = ModelFactory::user()::createTable();
        $this->assertInstanceOf(CreateTableUser::class, $tabla);

        $tabla = ModelFactory::jugador()::createTable();
        $this->assertInstanceOf(CreateTableJugador::class, $tabla);

        $tabla = ModelFactory::equipo()::createTable();
        $this->assertInstanceOf(CreateTableEquipo::class, $tabla);

        $tabla = ModelFactory::presupuesto()::createTable();
        $this->assertInstanceOf(CreateTablePresupuesto::class, $tabla);

    }
}
