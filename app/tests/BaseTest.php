<?php

namespace Tests;

use App\Faker\CreateFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class TestsCase
 *
 * @package Tests
 */
abstract class BaseTest extends TestCase
{
    /**
     * @var CreateFactory
     */
    public $fakerMethod;

    public function startApp()
    {
        require __DIR__ . '/../vendor/autoload.php';
        require_once __DIR__.'/../bootstrap/app.php';
        $this->fakerMethod = new CreateFactory();
    }
}
