<?php

use Illuminate\Support\Facades\Route;
use App\Models\Districts;
use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\UserNotifications;
use App\Models\Profiles;

/*
|--------------------------------------------------------------------------
| INDEX ROUTES
|--------------------------------------------------------------------------
|
| Non-authenticated index routes
|
*/

Route::get('/', function (Request $request) {

    $districts = Districts::orderBy('name','asc')->get();

    $categories = JobsCategory::with('icons')->with('jobs')->get();


    Cookie::queue('name', $request->test, 1);

    $jobs = Jobs::latest()->get();

    if(Auth::check() == "true"){

        $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();
        $profile = Profiles::where('user_id', Auth::user()->id)->get();

        return view('welcome', ['jobs' => $jobs, 'categories' => $categories, 'districts' => $districts, 'notifications' => $notifications, 'profiles' => $profile]);

    }else{

        return view('welcome', ['jobs' => $jobs, 'categories' => $categories, 'districts' => $districts]);

    }

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

Route::post('change-photo', [\App\Http\Controllers\HomeController::class, 'change_picture'])->name('change-photo');

Route::get('profile', [\App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

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
Route::get('/job-search', [\App\Http\Controllers\PagesController::class, 'jobs'])->name('job-search');
Route::post('/search-results', [\App\Http\Controllers\PagesController::class, 'search_results'])->name('search-results');
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
| Web routes for support nav link
|
*/

Route::get('support', [\App\Http\Controllers\PagesController::class, 'support'])->name('support');
Route::post('support-message', [\App\Http\Controllers\PagesController::class, 'supportMessage'])->name('support-message');
