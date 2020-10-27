<?php

namespace App\Http\Models\Orm;

use App\database\CreateTableEquipo;
use App\database\CreateTableJugador;

class EquipoORM extends BaseModel
{

    protected $table = 'equipos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre',
      'user_id',
      'max_jugadores',
      'min_jugadores'
    ];


    public static function createTable()
    {
        return new CreateTableEquipo();
    }

}
