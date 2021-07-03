<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\CrittersController;

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
// Route::post('register', [RegisterController::class, 'register']);
// Route::post('login', [RegisterController::class, 'login']);

// Route::post('critters', [CrittersController::class, 'index']);



     
Route::middleware('jwt.auth')->group( function () {
    Route::get('/critters', [CrittersController::class, 'index']);
    Route::get('/critters/fish',[ CrittersController::class, 'fish']);
    Route::get('/critters/bugs',[ CrittersController::class, 'bugs']);
    Route::get('/critters/seacreatures',[ CrittersController::class, 'seacreatures']);
    Route::get('/critters/donated',[ CrittersController::class, 'donated']);
    Route::get('/critters/Updatedonated',[ CrittersController::class, 'updateDonate']);
   
});

Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('logout', 'App\Http\Controllers\AuthController@logout');;
Route::post('user', 'App\Http\Controllers\AuthController@getAuthUser');

