<?php

use Illuminate\Support\Facades\Route;
use App\Models\Districts;
use Illuminate\Http\Request;
use App\Models\Jobs;

/*
|--------------------------------------------------------------------------
| INDEX ROUTES
|--------------------------------------------------------------------------
|
| Non-authenticated index routes
|
*/

Route::get('/', function (Request $request) {

    $districts = Districts::all();

    Cookie::queue('name', $request->test, 1);

    $jobs = Jobs::all();

    return view('welcome', compact('districts', 'jobs'));
})->name('index');

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
|
| User/Admin authentication routes
|
*/

Auth::routes();


/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
|
| Authenticated User routes
|
*/

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| JOB ROUTES
|--------------------------------------------------------------------------
|
| Non-authenticated Jobs Routes
|
*/

Route::get('/jobs', [\App\Http\Controllers\PagesController::class, 'jobs'])->name('jobs');
Route::get('/job/{id}', [\App\Http\Controllers\PagesController::class, 'job']);

Route::post('/search-results', [\App\Http\Controllers\PagesController::class, 'search_results'])->name('search-results');
/*
|--------------------------------------------------------------------------
| ERROR ROUTES
|--------------------------------------------------------------------------
|
| Trial routes for unpublished errors
|
*/

Route::get('/404', [\App\Http\Controllers\PagesController::class, 'error'])->name('404');


/*
|--------------------------------------------------------------------------
| ADMINISTRATOR ROUTES
|--------------------------------------------------------------------------
|
| Web routes for the Job Finder administrator
|
*/

Route::get('admin/home', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
