<?php

use App\Http\Request;

try {
    require __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__.'/../bootstrap/app.php';

    $request = new Request();
    $request->send();

} catch (\Exception $e) {
    dd($e);
}

