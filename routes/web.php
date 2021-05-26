<?php

use Illuminate\Support\Facades\Route;
use App\Models\Districts;
use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsCategory;

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

    $categories = JobsCategory::with('icons')->get();


    Cookie::queue('name', $request->test, 1);

    $jobs = Jobs::all();

    return view('welcome', ['jobs' => $jobs, 'categories' => $categories, 'districts' => $districts]);
})->name('home');

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

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
Route::get('/job/like/{id}', [\App\Http\Controllers\PagesController::class, 'likeJob']);
Route::get('/job/save/{id}', [\App\Http\Controllers\PagesController::class, 'saveJob']);
Route::get('/job-search', [\App\Http\Controllers\PagesController::class, 'jobs'])->name('job-search');
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
Route::get('/terms-and-conditions-privacy-policy', [\App\Http\Controllers\PagesController::class, 'policies'])->name('terms-and-conditions-privacy-policy');



/*
|--------------------------------------------------------------------------
| ADMINISTRATOR ROUTES
|--------------------------------------------------------------------------
|
| Web routes for the Job Finder administrator
|
*/

Route::get('admin/home', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/posted-jobs', [\App\Http\Controllers\AdminController::class, 'postedJobs'])->name('admin.posted-jobs');

Route::get('admin/users', [\App\Http\Controllers\AdminController::class, 'siteUsers'])->name('admin.site-users');
Route::get('admin/settings', [\App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');



/*
|--------------------------------------------------------------------------
| NEWSLETTER ROUTES
|--------------------------------------------------------------------------
|
| Web routes for newsletters
|
*/

Route::post('newsletter', [\App\Http\Controllers\NewsletterController::class, 'store'])->name('newsletter');

/*
|--------------------------------------------------------------------------
| PROFILE ROUTES
|--------------------------------------------------------------------------
|
| Web routes for user profile
|
*/

Route::get('profile', [\App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

/*
|--------------------------------------------------------------------------
| LANGUAGES ROUTES
|--------------------------------------------------------------------------
|
| Route for changing app language
|
*/

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
