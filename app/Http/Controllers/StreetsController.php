<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStreetRequest;
use App\Http\Requests\UpdateStreetRequest;
use App\Models\Street;
use App\Http\Resources\StreetsResource;
use App\Models\Car;
use App\Models\House;
use Illuminate\Http\Request;
use Log;

class StreetsController extends Controller
{

    /** ========================================================
     * FUNCTION: carsOnAStreet()
     * 
     * INPUT PARAMETERS:
     *      Street_name through request (API query parameter)
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      To return all the cars in a street.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function carsOnAStreet(Request $request) {
        $streetName = $request->input('streetname');
        $streetID = Street::where('street_name', $streetName)->pluck('id');
        $houses = House::where('street_id', $streetID)->get();

        return StreetsResource::collection($houses);
    }

    /** ========================================================
     * FUNCTION: fetchAllStreets()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      To return all the streets in the city.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function fetchAllStreets() {
        return StreetsResource::collection(Street::all());
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
     * @param  \App\Http\Requests\StoreStreetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function show(Street $street)
    {
        // return $street;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function edit(Street $street)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreetRequest  $request
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreetRequest $request, Street $street)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function destroy(Street $street)
    {
        //
    }
}
