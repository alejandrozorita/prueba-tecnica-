<?php

namespace App\Kernel;

use App\Http\Factory\CapsuleFactory;

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
        new CapsuleFactory();
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