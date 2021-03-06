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

Route::prefix('auth')->group(function () {

    Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

});

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile']);

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
| PROFILE API Routes
|--------------------------------------------------------------------------
|
| Separate routes for the profiles
|
*/


/*
|--------------------------------------------------------------------------
| JOB API Routes
|--------------------------------------------------------------------------
|
| Routes for jobs and it's related stuff
|
*/


Route::prefix('jobs')->group(function () {
    Route::post('/follow', [App\Http\Controllers\JobsController::class, 'followJob']);
     Route::get('/filter', [App\Http\Controllers\JobsController::class, 'getJobsByCategory']);
    Route::get('/get/all', [App\Http\Controllers\JobsController::class, 'getJobs']);
    Route::post('/job/like', [App\Http\Controllers\JobsController::class, 'likeJob']);
    Route::get('/get/saved-jobs', [App\Http\Controllers\JobsController::class, 'getSavedJobs']);

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
    Route::post('/delete', [App\Http\Controllers\NotificationsController::class, 'delete']);
});


Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile']);
    Route::get('/me', function(){
      return auth()->user();
    });
    Route::get('/followedjobs', [App\Http\Controllers\JobsController::class, 'getFollowedJobs']);
    Route::get('/get/all', [App\Http\Controllers\NotificationsController::class, 'getUserNotifications']);
    Route::get('/categories', [App\Http\Controllers\JobsController::class, 'getCategories']);
    Route::get('/get/saved-jobs', [App\Http\Controllers\JobsController::class, 'getSavedJobs']);
    Route::get('/get/saved', [App\Http\Controllers\JobsController::class, 'getSavedJob']);
    Route::get('/get-all', [App\Http\Controllers\ActivityController::class, 'getAll']);

    Route::post('/activities/create', [App\Http\Controllers\ActivityController::class, 'create']);
    Route::get('/activities/get-all', [App\Http\Controllers\ActivityController::class, 'getAll']);

    Route::post('/save/job', [App\Http\Controllers\JobsController::class, 'saveJob']);
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

    Route::post('/delete-one', [App\Http\Controllers\ActivityController::class, 'deleteOne']);

    Route::post('/delete-all', [App\Http\Controllers\ActivityController::class, 'deleteAll']);

});
