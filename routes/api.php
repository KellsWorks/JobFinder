<?php

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

// Authentication Routes

Route::post('/auth/register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });

    Route::post('/auth/logout', [App\Http\Controllers\AuthController::class, 'logout']);
});

// Jobs routes

Route::prefix('jobs')->group(function () {

    Route::get('/get/all', [App\Http\Controllers\JobsController::class, 'getJobs']);

    Route::post('/get/saved-jobs', [App\Http\Controllers\JobsController::class, 'getSavedJobs']);

    Route::post('/save/job', [App\Http\Controllers\JobsController::class, 'saveJob']);
});
