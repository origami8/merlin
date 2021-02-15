<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffeController;
use App\Http\Controllers\UaController;
use App\Http\Controllers\UbController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KundeController;
use App\Http\Controllers\BestellungController;
use App\Http\Controllers\LagerController;
use App\Http\Controllers\MitgliedschaftController;

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

// 127.0.0.1:8000/api/
// localhost:8000/api/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("createTestdata","App\Http\Controllers\TestdataController@createTestdata");
Route::post("createAffe","App\Http\Controllers\AffeController@createAffe");
Route::post("createUa","App\Http\Controllers\UaController@createUa");
Route::post("createUb","App\Http\Controllers\UbController@createUb");
Route::post("addToUa","App\Http\Controllers\UaController@addToUa");
Route::post("addToUb","App\Http\Controllers\UbController@addToUb");

Route::get("getAll", "App\Http\Controllers\TestController@getAll");
Route::get("getAll2", "App\Http\Controllers\AffeController@getAll");
Route::get("getAllUa", "App\Http\Controllers\UaController@getAll");
Route::get("getAllUb", "App\Http\Controllers\UbController@getAll");

Route::get("withKunde", "App\Http\Controllers\KundeController@withRelations");
Route::get("withMitgliedschaft", "App\Http\Controllers\MitgliedschaftController@withRelations");
Route::get("withBestellung", "App\Http\Controllers\BestellungController@withRelations");
Route::get("withArtikel", "App\Http\Controllers\ArtikelController@withRelations");
Route::get("withLager", "App\Http\Controllers\LagerController@withRelations");

Route::put('updateUa', 'App\Http\Controllers\UaController@update');
Route::delete('deleteUa,', 'App\Http\Controllers\UaController@delete');
Route::get("withUb", "App\Http\Controllers\UbController@withRelations");
Route::put('updateUb', 'App\Http\Controllers\UbController@update');
Route::delete('deleteUb,', 'App\Http\Controllers\UbController@delete');

