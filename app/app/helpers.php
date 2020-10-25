<?php

use App\Http\Response;
use Symfony\Component\VarDumper\VarDumper;

if (! function_exists('view')) {
    /**
     * @param $view
     *
     * @return \App\Http\Response
     */
    function view($view) {
        return new Response($view);
    }
}

if (! function_exists('viewPath')) {
    /**
     * @param $view
     *
     * @return string
     */
    function viewPath($view) {
        return __DIR__ . "/../views/$view.php";
    }
}

if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return getenv($key) ?? $default;
    }
}
if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return getenv($key) ?? $default;
    }
}

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        exit(1);
    }
}