<?php

use Illuminate\Support\Facades\Route;
use App\Models\Districts;

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

Route::get('/', function () {
    $districts = Districts::all();
    return view('welcome', compact('districts'));
});
// Auth::routes();
Auth::routes(['reset' => false]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobs', [\App\Http\Controllers\HomeController::class, 'jobs'])->name('jobs');

Route::get('admin/home', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
