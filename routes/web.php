<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [
    dashboardController::class,
    'main'
]);
Route::post('postTest', [
    dashboardController::class,
    'test'
]);
Route::get('RegisterAndLogin', [
    dashboardController::class,
    'registerAndLogin'
]);
