<?php

use Illuminate\Support\Facades\Route;
use App\Models\Districts;
use Illuminate\Http\Request;
use App\Models\Jobs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $districts = Districts::all();
    Cookie::queue('name', $request->test, 1);

    $jobs = Jobs::all();

    return view('welcome', compact('districts', 'jobs'));
});
// Auth::routes();
Auth::routes(['reset' => false]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobs', [\App\Http\Controllers\PagesController::class, 'jobs'])->name('jobs');
Route::get('/404', [\App\Http\Controllers\PagesController::class, 'error'])->name('404');
Route::get('admin/home', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
