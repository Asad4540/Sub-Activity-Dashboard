<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RfpController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\TargetingUpdates\TargetingUpdatesController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rfp-details', [RfpController::class, 'index'])->name('rfp.details');

Route::get('/users/view', [UsersController::class, 'index'])->name('user.view');
Route::get('/targeting-updates', [TargetingUpdatesController::class, 'index'])->name('targeting.updates.index');



Route::get('/users/new', [UsersController::class, 'new'])->name('user.new');
Route::post('/users/store', [UsersController::class, 'store'])->name('user.store');
