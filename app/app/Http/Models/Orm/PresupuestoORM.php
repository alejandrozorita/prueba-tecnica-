<?php

namespace App\Http\Models\Orm;

use App\database\CreateTablePresupuesto;
use App\Http\Models\Equipo;
use App\Http\Models\Jugador;

/**
 * Class PresupuestoORM
 *
 * @package App\Http\Models\Orm
 */
class PresupuestoORM extends BaseModel
{
    protected $table = 'presupuesto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'presupuesto',
    'equipo_id',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne(Equipo::class, 'id', 'equipo_id');
    }

    public static function createTable()
    {
        return new CreateTablePresupuesto();
    }
}
