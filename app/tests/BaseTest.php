<?php

namespace Tests;

use CreateFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class TestsCase
 *
 * @package Tests
 */
abstract class BaseTest extends TestCase
{
    /**
     * @var CreateFactory;
     */
    protected $fakerMethod;

    public function startApp()
    {
        require __DIR__.'/../bootstrap/app.php';

        $this->fakerMethod = new CreateFactory();
    }
}
