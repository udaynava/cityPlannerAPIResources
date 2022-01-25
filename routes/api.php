<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\StreetsController;
use Faker\Extension\PersonExtension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
** =================================================================
** Route usage:
**  Middleware Route group for authentication with prefix 'v1'.
** 
** History
** 2022-01-24 Uday - Add route group.
** =================================================================
*/
Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    // Fetch all streets in the city
    // Route::get('/streets', [StreetsController::class, 'fetchAllStreets']);

    // Fetch a particular street with street id
    // Route::get('streets/{street}', [StreetsController::class, 'show']);

    // Fetch all the houses in the city with street_details as well
    // Route::get('/houses', [HousesController::class, 'fetchAllHouses']);

    /*
    ** =================================================================
    ** Route usage:
    **  Fetch all the people living in the city
    **  
    **  API Resource:
    **      PersonsResource
    ** 
    ** History
    ** 2022-01-24 Uday - Add route group.
    ** =================================================================
    */
    Route::get('/persons', [PersonsController::class, 'fetchAllPeople']);

    /*
    ** =================================================================
    ** Route usage:
    **  Fetch all cars given a 'streetname'
    **  
    **  API Resource:
    **      StreetsResource
    ** 
    ** History
    ** 2022-01-24 Uday - Add route group.
    ** =================================================================
    */
    Route::get('/carsonastreet', [StreetsController::class, 'carsOnAStreet']);

    /*
    ** =================================================================
    ** Route usage:
    **  Fetch Owner/Owners of a vehicle, given the 'licenseplate'
    **  
    **  API Resource:
    **      CarsResource
    ** 
    ** History
    ** 2022-01-24 Uday - Add route group.
    ** =================================================================
    */
    Route::get('/owners', [CarsController::class, 'carOwners']);

    /*
    ** =================================================================
    ** Route usage:
    **  Fetch full address and street details of a house, 
    **      give a person's first and last name
    **  
    **  API Resource:
    **      HousesResource
    ** 
    ** History
    ** 2022-01-24 Uday - Add route group.
    ** =================================================================
    */
    Route::get('/fulladdress', [HousesController::class, 'fetchFullAddress']);

});