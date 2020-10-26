<?php

namespace App\Http\Factory;

use App\Http\Models\Orm\Capsule;

/**
 * Class CapsuleFactory
 *
 * @package App\Http\Factory
 */
class CapsuleFactory
{
    /**
     * CapsuleFactory constructor.
     */
    public function __construct()
    {
        return new Capsule();
    }

}