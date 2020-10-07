<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class ShowCars extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $cars = [];

        foreach (Cars::all() as $key=>  $car) {
            $cars[$key]['id'] = $car->id;
            $cars[$key]['make'] = $car['Make'];
            $cars[$key]['model'] = $car['Model'];
            $cars[$key]['colours'] = $car['Colour'];
            $cars[$key]['topSpeed'] = $car['Top speed'];
        }

        return view('carsTable', ['cars' => $cars]);
    }
}
