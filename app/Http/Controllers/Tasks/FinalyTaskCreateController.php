<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;

class FinalyTaskCreateController extends Controller
{
    public function __invoke()
    {
        $params = request()->all();
        return $params;
    }
}
cd 
