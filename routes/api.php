<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
Route::apiResource('role','App\Http\Controllers\RoleController');
Route::get('searchRole',[RoleController::class, 'searchRole']);
Route::apiResource('category','App\Http\Controllers\CategoryController');
Route::get('searchCategory',[CategoryController::class, 'searchCategory']);
Route::apiResource('user','App\Http\Controllers\UserController');
Route::get('searchUser',[UserController::class, 'searchUserByName']);