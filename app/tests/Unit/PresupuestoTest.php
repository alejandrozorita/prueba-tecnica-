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
    /**
     * @var int
     */
    private $presupuestoInicial;


    /** @test */
    public function getPresupuesto()
    {
        $presupuesto = $this->crearPresupuesto();

        $this->assertEquals($this->presupuestoInicial, $presupuesto->getPresupuesto());
    }


    /** @test */
    public function setPresupuesto()
    {
        $presupuesto = $this->crearPresupuesto();

        $presupuesto->setPresupuesto(20000);
        $this->assertEquals(20000, $presupuesto->getPresupuesto());
    }


    /**
     * @return \App\Http\Models\Presupuesto
     */
    private function crearPresupuesto()
    {
        $this->startApp();

        $this->presupuestoInicial = 10000;

        return $this->fakerMethod->createFactoryPresupuesto([
          'equipo_id' => 1,
          'presupuesto' => $this->presupuestoInicial,
        ]);
    }

}