<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| INDEX ROUTES
|--------------------------------------------------------------------------
|
| Non-authenticated index routes
|
*/

Route::get('/', [\App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/about-us', [\App\Http\Controllers\PagesController::class, 'about'])->name('about-us');

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

Route::post('change-photo', [\App\Http\Controllers\HomeController::class, 'change_picture'])->name('change-photo');

Route::get('profile', [\App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::post('update-phone-number', [\App\Http\Controllers\HomeController::class, 'update_phone'])->name('update-phone-number');

Route::get('notification-read/{id}', [\App\Http\Controllers\HomeController::class, 'notificationRead'])->name('notification-read');

Route::get('notification-delete/{id}', [\App\Http\Controllers\HomeController::class, 'notificationDelete'])->name('notification-delete');

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

Route::get('/job/unsave/{id}', [\App\Http\Controllers\PagesController::class, 'unSaveJob']);

Route::get('/job-search', [\App\Http\Controllers\PagesController::class, 'jobs'])->name('job-search');

Route::get('/explore-by-category/{id}', [\App\Http\Controllers\PagesController::class, 'exploreByCategory'])->name('explore-by-category');

/*
|--------------------------------------------------------------------------
| TERMS AND CONDITIONS ROUTES
|--------------------------------------------------------------------------
|
| Terms, Service, Rights, Copyrights
|
*/

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

Route::get('admin/new-job', [\App\Http\Controllers\AdminController::class, 'newJob'])->name('admin.new-job');

Route::post('admin/add-job', [\App\Http\Controllers\AdminController::class, 'addJob'])->name('admin.add-job');


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
| LANGUAGES ROUTES
|--------------------------------------------------------------------------
|
| Route for changing app language
|
*/

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

/*
|--------------------------------------------------------------------------
| SUPPORT ROUTES
|--------------------------------------------------------------------------
|
| Web routes for support/contact us
|
*/

Route::get('support', [\App\Http\Controllers\PagesController::class, 'support'])->name('support');

Route::post('support-message', [\App\Http\Controllers\PagesController::class, 'supportMessage'])->name('support-message');
