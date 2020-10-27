<?php

namespace App\test;

use Tests\BaseTest;

/**
 * Class CreateTableJugadorTest
 *
 * @package App\test
 */
class UsersTest extends BaseTest
{
    /** @test  */
    public function crearUsuario()
    {
        $this->startApp();

        $user = new UserFactory('Alejandro', 'contacto@alejandrozorita.me');
        $this->assertEquals('Alejandro', $user->nombre);
        $this->assertEquals('contacto@alejandrozorita.me', $user->email);

    }
}