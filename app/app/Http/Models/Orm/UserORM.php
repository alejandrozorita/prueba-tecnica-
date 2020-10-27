<?php

namespace App\Http\Models\Orm;

use App\database\CreateTableUser;

/**
 * Class Jugador
 *
 * @package App\Http\Models\Orm
 */
class UserORM extends BaseModel
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


    public static function createTable()
    {
        return new CreateTableUser();
    }
}
