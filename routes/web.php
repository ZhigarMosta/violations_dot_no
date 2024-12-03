<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get("/",[ReportController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');
    // Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Route::get("/array",[MainController::class,"showArray"])->name("array");
    // Route::get('/dashboard', [ReportController::class,"index"])->middleware(['auth', 'verified'])->name('dashboard');
    // Route::get("/reports",[ReportController::class,"index"])->name("report.index");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete("/reports/{report}",[ReportController::class,"destroy"])->name("reports.destroy");
    Route::post('/reports',[ReportController::class,'store'])->name('reports.store');
    Route::get("/reports/{report}",[ReportController::class,"show"])->name("report.show");
    Route::put('/reports/{report}',[ReportController::class,'update'])->name('report.update');
});
Route::middleware((Admin::class))->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
require __DIR__.'/auth.php';
