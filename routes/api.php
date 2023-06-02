<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("list-employees", [ApiController::class, "listEmploye"]);


// Route::get('/user/{id}', [UserController::class, 'show']);


// Route::get("single-empolye/{id}", [ApiController::getSingleEmpolye]);

Route::post("add-employe", [ApiController::class, 'createEmploye']);
// Route::put("update-employe/{id}", [ApiController::updataEmploye]);
// Route::delete("delete-employe/{id}", [ApiController::deleteEmploye]);