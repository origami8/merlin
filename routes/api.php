<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/createTestdata","App\Http\Controllers\TestdataController@createTestdata");
// Route::post("/createAffe","App\Http\Controllers\AffeController@createAffe");
Route::get("/getAll", "App\Http\Controllers\TestController@getAll");
Route::get("/getAll2", "App\Http\Controllers\AffeController@getAll");

Route::get("with", "App\Http\Controllers\KundeController@withRelations");
Route::get("with", "App\Http\Controllers\MitgliedschaftController@withRelations");
Route::get("with", "App\Http\Controllers\BestellungController@withRelations");
Route::get("with", "App\Http\Controllers\ArtikelController@withRelations");
Route::get("with", "App\Http\Controllers\LagerController@withRelations");

