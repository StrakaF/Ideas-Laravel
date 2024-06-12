<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index']);

Route::post('/idea', [DashboardController::class, 'index'])->name('idea.create');

Route::get('/terms', function (){
    return view('terms');
});




