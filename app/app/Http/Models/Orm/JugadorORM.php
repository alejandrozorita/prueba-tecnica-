<?php

namespace App\Http\Models\Orm;

use App\database\CreateTableJugador;

/**
 * Class Jugador
 *
 * @package App\Http\Models\Orm
 */
class JugadorORM extends BaseModel
{

    protected $table = 'jugadores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre',
      'imagen',
      'equipo_id',
      'precio',
      'agilidad',
      'fuerza',
      'suerte',
    ];

    public static function createTable()
    {
        return new CreateTableJugador();
    }
}
