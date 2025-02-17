<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Admin\AdminController;

// Route::get('/', function () {
//     return view('');
// });

Route::get('/', [TravelController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/travel/{id}', [TravelController::class, 'show'])->name('travel.show');
    Route::get('/bookings/{id}', [TravelController::class, 'makeBooking'])->name('travel.book');
    Route::post('/bookings/{id}', [TravelController::class, 'store'])->name('travel.store');
    Route::get('users/my-bookings', [UserController::class, 'bookings'])->name('users.booking');
});

Route::get('/payments/success', function () {
    return view('payments.success');
})->name('payments.success');
Route::get('/about-us', function () {
    return view('Travel.AboutUs');
})->name('about-us');

Route::get('/payments/cancel', function () {
    return view('payments.cancel');
})->name('payments.cancel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::get('admin/packages', [AdminController::class, 'packages'])->name('admin.packages');
Route::get('admin/packages/create', [AdminController::class, 'createPackage'])->name('admin.packages.create');
Route::post('admin/packages/create', [AdminController::class, 'storePackage'])->name('admin.packages.store');
Route::delete('admin/packages/{package}', [AdminController::class, 'destroy'])->name('admin.packages.destroy');
Route::get('admin/tours', [AdminController::class, 'tours'])->name('admin.tours');
Route::get('admin/tours/create', [AdminController::class, 'createTours'])->name('admin.tours.create');
Route::post('admin/tours/create', [AdminController::class, 'storeTours'])->name('admin.tours.store');
Route::delete('admin/tours/{tour}', [AdminController::class, 'destroy'])->name('tours.destroy');
Route::get('admin/users', [AdminController::class, 'users'])->name('users');
Route::delete('admin/bookings/{id}', [AdminController::class, 'destroybooking'])->name('admin.bookings.destroy');
Route::delete('admin/packages/{id}', [AdminController::class, 'destroypackage'])->name('admin.packages.destroy');
Route::delete('admin/tours/{id}', [AdminController::class, 'destroydestination'])->name('admin.tours.destroy');
// Route::delete('admin/tours/{tour}', [AdminController::class, 'destroytour'])->name('admin.tours.destroy');

// });

require __DIR__ . '/auth.php';
