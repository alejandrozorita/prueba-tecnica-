<?php

namespace App\Http\Models\Orm;

use App\database\CreateTablePresupuesto;

class PresupuestoORM extends BaseModel
{

    protected $table = 'jugadores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'presupuesto',
    'equipo_id',
    ];


    public static function createTable()
    {
        return new CreateTablePresupuesto();
    }
}
