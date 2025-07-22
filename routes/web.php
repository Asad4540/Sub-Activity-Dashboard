<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\SettingsController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/subscribers', [SubscribersController::class, 'index'])->name('subscribers');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
