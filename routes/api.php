<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH API Routes
|--------------------------------------------------------------------------
|
| Authentication Routes secured with Laravel Sanctum
|
*/

Route::post('/auth/register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/me', function(Request $request) {
        return auth()->user();
    });

    Route::post('/auth/logout', [App\Http\Controllers\AuthController::class, 'logout']);

    Route::post('/auth/change-profile-picture', [App\Http\Controllers\AuthController::class, 'change_profile_picture']);
});

/*
|--------------------------------------------------------------------------
| APP INFO API Routes
|--------------------------------------------------------------------------
|
| Application information
|
*/


Route::prefix('app')->group(function () {
    Route::post('/copyright/terms-and-conditions', [App\Http\Controllers\CopyrightController::class, 'get']);
});

/*
|--------------------------------------------------------------------------
| JOB API Routes
|--------------------------------------------------------------------------
|
| Routes for jobs and it's related stuff
|
*/


Route::prefix('jobs')->group(function () {

    Route::get('/get/all', [App\Http\Controllers\JobsController::class, 'getJobs']);

    Route::post('/get/saved-jobs', [App\Http\Controllers\JobsController::class, 'getSavedJobs']);

    Route::post('/save/job', [App\Http\Controllers\JobsController::class, 'saveJob']);

    Route::post('/job/like', [App\Http\Controllers\JobLikesController::class, 'like']);
    Route::post('/job/dislike', [App\Http\Controllers\JobLikesController::class, 'dislike']);
});

/*
|--------------------------------------------------------------------------
| NOTIFICATIONS API Routes
|--------------------------------------------------------------------------
|
| Notifications routes based on user preferences
|
*/


Route::prefix('notifications')->group(function () {

    Route::post('/get/all', [App\Http\Controllers\NotificationsController::class, 'getUserNotifications']);

    Route::post('/delete', [App\Http\Controllers\NotificationsController::class, 'delete']);
});

/*
|--------------------------------------------------------------------------
| ACTIVITIES API Routes
|--------------------------------------------------------------------------
|
| Activities routes based on user preferences
|
*/


Route::prefix('activities')->group(function () {

    Route::post('/create', [App\Http\Controllers\ActivityController::class, 'create']);

    Route::post('/delete-one', [App\Http\Controllers\ActivityController::class, 'deleteOne']);

    Route::post('/delete-all', [App\Http\Controllers\ActivityController::class, 'deleteAll']);
});
