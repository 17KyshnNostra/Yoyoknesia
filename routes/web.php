<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about-us');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('porto');
Route::get('/service-Video-Dokumentasi', [HomeController::class, 'dokumentasi'])->name('dokumentasi');
Route::get('/service-Video-Company-Profile', [HomeController::class, 'company'])->name('company');

Route::get('/tracking', [BookingController::class, 'trackingForm'])->name('tracking.form');
Route::get('/tracking/search', [BookingController::class, 'searchBooking'])->name('tracking.search');


Route::get('/booking', function () {
    $batches = \App\Models\Batch::whereDate('start_date', '>=', now())->get();
    return view('booking.form', compact('batches'));
})->name('booking.form');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/debug-booking', function () {
    return \App\Models\Booking::latest()->get();
});


// Route::post('/package/search', [PackageController::class, 'search'])->name('package.search');
// Route::get('/package/{package}', [PackageController::class, 'show'])->name('package.show');
// Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
// Route::post('/booking/check', [BookingController::class, 'check'])->name('booking.check');

// Route::get('/login', [AuthController::class, 'loginPage'])->name('auth.login');

