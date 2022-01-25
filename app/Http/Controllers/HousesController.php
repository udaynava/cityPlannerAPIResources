<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;
use App\Http\Resources\HousesResource;
use App\Models\House;
use App\Models\Person;
use Illuminate\Http\Request;
use Log;

class HousesController extends Controller
{
    /** ========================================================
     * FUNCTION: fetchAllHouses()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      To return all the houses in the city.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function fetchAllHouses() {
        return HousesResource::collection(House::all());
    }

    /** ========================================================
     * FUNCTION: fetchFullAddress()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      To return full address(both house and street) when given a person name.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function fetchFullAddress(Request $request) {
        $firstName = (string) $request->input('firstname');
        $lastName = (string) $request->input('lastname');

        // $person = Person::where('first_name', $firstName)
        //                 ->where('last_name', $lastName)
        //                 ->get();

        $houseID = Person::where('first_name', $firstName)
                        ->where('last_name', $lastName)
                        ->pluck('house_id');

        $house = House::where('id', $houseID)->get();
        return HousesResource::collection($house);
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
     * @param  \App\Http\Requests\StoreHouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHouseRequest  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseRequest $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
    }
}
