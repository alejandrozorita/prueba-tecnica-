<?php

namespace App\Kernel;

use App\Http\Request;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class App
 *
 * @package App\Kernel
 */
class App
{
    private static $instance = null;

    public function __construct()
    {
        Dotenv::createImmutable(__DIR__ . '/../../')->load();
        $capsule = new Capsule();
        $capsule->addConnection([
          "driver" => $_ENV['DB_CONECTION'],
          "host" => $_ENV['DB_HOST'],
          "port" => $_ENV['DB_PORT'],
          "database" => $_ENV['DB_DATABASE'],
          "username" => $_ENV['DB_USERNAME'],
          "password" => $_ENV['DB_PASSWORD']
        ]);
        $capsule->bootEloquent();
    }


    public function start()
    {
        $request = new Request();
        $request->send();
    }


    /**
     * @return \App\Kernel\app|null
     */
    public static function getSingletonInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new App();
        }
        return self::$instance;
    }
}