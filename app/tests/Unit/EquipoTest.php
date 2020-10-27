<?php

namespace Test\Unit;

use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class PresupuestoTest extends BaseTest
{

    /** @test  */
    public function comprobarMaxyMinJugadores()
    {
        $this->startApp();

        $equipo = $this->fakerMethod->createFactoryEquipo([
          'max_jugadores' => 10,
          'min_jugadores' => 6,
        ]);

        $this->assertEquals(10, $equipo->getMaxJugadores());
        $this->assertEquals(6, $equipo->getMinJugadores());

    }

}