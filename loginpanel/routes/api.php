<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->prefix('/user', function (Request $request) {
    Route::get('dashboard',[AuthController::class,'dashboard']);
});
Route::post('user-register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
