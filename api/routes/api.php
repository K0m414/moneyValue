<?php

use App\Http\Controllers\Api\CurrencyController;
use App\Http\Controllers\Api\PairController;
// use App\Http\Controllers\Api\ConvertController;

use App\Http\Controllers\AuthController;



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
//route s'authentifier
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
});

//route pour les données des devises
Route::apiResource('currencies', CurrencyController::class);
Route::apiResource('pairs', PairController::class);
Route::get('convert/pair_id={id}&convert_value={value}', [PairController::class, 'convert']);
