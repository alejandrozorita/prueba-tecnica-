<?php

namespace App\Http\Models\Orm;

use App\database\CreateTableEquipo;
use App\Http\Models\Jugador;
use App\Http\Models\Presupuesto;

/**
 * Class EquipoORM
 *
 * @package App\Http\Models\Orm
 */
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


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'equipo_id', 'id');
    }


    public function presupuesto()
    {
        return $this->hasOne(Presupuesto::class, 'equipo_id', 'id');
    }

}