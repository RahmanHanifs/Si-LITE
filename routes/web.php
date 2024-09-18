<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/dashboarddosen', function () {
    return view('dashboarddosen');
});

Route::get('/dashboarddekan', function () {
    return view('dashboarddekan');
});

Route::get('/dashboarddekan', function () {
    return view('dashboardkaprodi');
});