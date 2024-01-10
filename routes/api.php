<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RoomController;

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

Route::post('property', [PropertyController::class, 'store']);
Route::get('property',[PropertyController::class, 'index']);
Route::put('property/{id}', [PropertyController::class, 'update']);
Route::delete('property/{id}', [PropertyController::class, 'delete']);

Route::post('room', [RoomController::class, 'store']);
Route::get('room/{propertyId}',[RoomController::class, 'show']);
Route::put('room/{id}', [RoomController::class, 'update']);
Route::delete('room/{id}', [RoomController::class, 'delete']);
