<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class AddCars extends Controller
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
        $car = new Cars;

        $car->Make = $request->carsMake;
        $car->Model = $request->carsModel;
        $car->Colour = $request->carsColour;
        $topspeed = substr($request->carsSpeed, 0, strpos($request->carsSpeed, 'mph'));
        $topspeed = (int) $topspeed;
        $car->{'Top speed'} = $topspeed;
        $car->save();
        return redirect()->route('carsTable');
    }
}
