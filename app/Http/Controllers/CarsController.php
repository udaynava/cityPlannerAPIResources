<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarsResource;
use App\Models\Car;
use App\Models\Person;
use App\Models\Street;
use Illuminate\Http\Request;
use Log;

use function PHPSTORM_META\type;

class CarsController extends Controller
{
    /** ========================================================
     * FUNCTION: carsOnAStreet()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      To return the car owners give the license plate.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function carOwners(Request $request) {
        $plate = (string) $request->input('licenseplate');
        $houseID = Car::where('license_plate', $plate)->pluck('house_id');
        $carOwners = Person::where('house_id', $houseID)->get();
        return CarsResource::collection($carOwners);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
