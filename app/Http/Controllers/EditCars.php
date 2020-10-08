<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class EditCars extends Controller
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
        $car = Cars::find($request->id);

        if (!empty($request->carsMake)) {
            $car->Make = $request->carsMake;
        }

        if (!empty($request->carsModel)) {
            $car->Model = $request->carsModel;
        }

        if (!empty($request->carsColour)) {

            $car->Colour = $request->carsColour;
        }

        if (!empty($request->carsSpeed)) {
            $topspeed = substr($request->carsSpeed, 0, strpos($request->carsSpeed, 'mph'));
            $topspeed = (int) $topspeed;
            $car->{'Top speed'} = $topspeed;
        }

        $car->save();

        return redirect()->route('carsTable');
    }
}
