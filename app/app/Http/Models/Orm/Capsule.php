<?php

namespace App\Http\Models\Orm;

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as CapsuleBase;

/**
 * Class Capsule
 *
 * @package App\Http\Models\Orm
 */
class Capsule
{

    /**
     * Capsule constructor.
     */
    public function __construct()
    {
        Dotenv::createImmutable(__DIR__ . '/../../../../')->load();
        $capsule = new CapsuleBase();
        $capsule->addConnection([
          "driver" => $_ENV['DB_CONNECTION'],
          "host" => $_ENV['DB_HOST'],
          "port" => $_ENV['DB_PORT'],
          "database" => $_ENV['DB_DATABASE'],
          "username" => $_ENV['DB_USERNAME'],
          "password" => $_ENV['DB_PASSWORD']
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $this;
    }

}