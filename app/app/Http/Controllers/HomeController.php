<?php

namespace App\Http\Controllers;

use App\Http\Models\Orm\JugadorORM;

class HomeController
{
    public function index()
    {
        return view('home');
    }
}