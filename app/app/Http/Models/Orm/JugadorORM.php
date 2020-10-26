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
      'email',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password',
      'remember_token',
    ];


    public static function createTable()
    {
        return new CreateTableJugador();
    }
}
