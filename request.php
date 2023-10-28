<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

Route::get('/planets', function () {
    $selectedPlanet = request('planet'); 

    
    $planets = [

    ];

    if ($selectedPlanet) {
        $planets = array_filter($planets, function ($planet) use ($selectedPlanet) {
            return strcasecmp($planet['name'], $selectedPlanet) === 0;
        });
    }

    return view('planets', compact('planets', 'selectedPlanet'));
});

?>