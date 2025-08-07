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

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/subscribers', [SubscribersController::class, 'index'])->name('subscribers');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

//Dashboard Edit
Route::get('/dashboard/edit', function () {
    return view('partials.dashboardEdit');
})->name('dashboard.edit');

//Analytics Edit
Route::get('/analytics/edit', function () {
    return view('partials.analyticsEdit');
})->name('analytics.edit');