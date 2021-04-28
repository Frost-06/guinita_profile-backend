<?php

use App\Http\Controllers\MyInfoController;
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
//routing through my info and by its id
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("myinfo", [MyInfoController::class, 'index']);
Route::get("myinfo/{id}", [MyInfoController::class, 'show']);
