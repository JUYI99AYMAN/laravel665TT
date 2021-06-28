<?php

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Hellocontroller;
use App\Http\Controllers\UserController;


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

Route::get("dashboard",[DashboardController::class,'getDashboard']);

//get specic dashboard detail
Route::get("dashboard/{id}",[DashboardController::class,'getDashboardById']);

//Add dashboard
Route::post("add",[DashboardController::class,'getadd']);

//update Dashboard

Route::put("update/{id}",[DashboardController::class,'updateDashboard']);

//Delete Dashboard

Route::delete("delete/{id}",[DashboardController::class,'deleteDashboard']);


// Route::post("register",[UserController::class,'register']);

// Route::post("login",[UserController::class,'login']);








