<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class ViewCarController extends Controller
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
        $carSpec = [];

        $car = Cars::find($request->id);

        $carSpec['id'] = $car->id;
        $carSpec['make'] = $car->Make;
        $carSpec['model'] = $car->Model;
        $carSpec['colours'] = $car->Colour;
        $carSpec['topSpeed'] = $car->{'Top speed'};

        return view('view-car-spec', ['car' => $carSpec]);

    }
}
