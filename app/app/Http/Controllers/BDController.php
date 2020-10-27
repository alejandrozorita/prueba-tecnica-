<?php

namespace App\Http\Controllers;

use App\database\CreateTableEquipo;
use App\database\CreateTableJugador;
use App\database\CreateTablePresupuesto;
use App\database\CreateTableUser;
use mysql_xdevapi\Exception;

/**
 * Class BDController
 *
 * @package App\Http\Controllers
 */
class BDController
{
    public function cargar()
    {
        new CreateTablePresupuesto();
        new CreateTableJugador();
        new CreateTableUser();
        new CreateTableEquipo();
        die("Base de datos cargada. <a href='http://localhost/home/index'>Ir a la home</a>");
    }
}