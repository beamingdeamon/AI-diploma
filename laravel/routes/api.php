<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlannerController;
use App\Http\Controllers\TypeController;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['jwt.verify']], function(){
    Route::delete('/logout', [TokenController::class, 'deleteToken']);
    Route::get('/user', [UserController::class, 'getInfo']);
    Route::put('/user/edit', [UserController::class, 'changeUserInfo']);
    Route::post('/planner', [PlannerController::class, 'createPlanner']);
    Route::get('/planner', [PlannerController::class, 'getPlanner']);
    Route::post('/type', [TypeController::class, 'createType']);
    Route::get('/type', [TypeController::class, 'getType']);
});
