<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class TestsCase
 *
 * @package Tests
 */
abstract class BaseTest extends TestCase
{
    protected $app;

    public function startApp()
    {
        require __DIR__.'/../bootstrap/app.php';
    }
}
