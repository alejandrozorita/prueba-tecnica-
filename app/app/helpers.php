<?php

use App\Http\Response;
use Symfony\Component\VarDumper\VarDumper;

if (! function_exists('view')) {
    /**
     * @param $view
     *
     * @param  array  $variables
     *
     * @return \App\Http\Response
     */
    function view($view, array $variables = []) {
        return new Response($view, $variables);
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

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        exit(1);
    }
}