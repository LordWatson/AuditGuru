<?php

use App\Http\Controllers\AssessmentsController;
use App\Http\Controllers\AuditReportsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\GapAnalysisController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PolicyGeneratorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('user-management', UserController::class);
    Route::resource('assessments', AssessmentsController::class);
    Route::resource('gap-analysis', GapAnalysisController::class);
    Route::resource('policy-generator', PolicyGeneratorController::class);
    Route::resource('documents', DocumentsController::class);
    Route::resource('audit-reports', AuditReportsController::class);
    Route::resource('notifications', NotificationsController::class);
    Route::resource('settings', SettingsController::class);
});

require __DIR__.'/auth.php';
