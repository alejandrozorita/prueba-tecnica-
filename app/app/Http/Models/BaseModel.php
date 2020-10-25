<?php

namespace App\Http\Models;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 *
 * @package App\Http\Models
 */
class BaseModel
{

    public function __construct()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
          "driver" => env('DB_CONNECTION', "mysql"),
          "host" => env('DB_HOST', "mariadb"),
          "port" => env('DB_PORT', 3306),
          "database" => env('DB_DATABASE'),
          "username" => env('DB_USERNAME'),
          "password" => env('DB_PASSWORD')
        ]);
        $capsule->bootEloquent();
    }

}