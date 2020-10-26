<?php

namespace App\Http\Controllers;

use App\Http\Models\Orm\JugadorORM;

class HomeController
{
    public function index()
    {
        JugadorORM::createTable();
        return view('home');
    }
}