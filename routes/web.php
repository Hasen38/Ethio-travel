<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Travelcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\users\Usercontroller;
use App\Http\Controllers\Admin\Admincontroller;

// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

// Route::view('/home', 'home')
    Route::get('/', [Travelcontroller::class,'index'])->name('index');


    Route::middleware('auth')->group(function () {
        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

 Route::get('/travel/{id}',[Travelcontroller::class,'show'])->name('travel.show');
 Route::get('/bookings/{id}',[Travelcontroller::class,'Makebooking'])->name('travel.book');
 Route::post('/bookings/{id}',[Travelcontroller::class,'store'])->name('travel.store');
 Route::get('users/my-bookings', [UserController::class, 'bookings'])->name('users.booking');
 Route::get('/payments/success', function () {
    return view('payments.success');
})->name('payments.success');

Route::get('/payments/cancel', function () {
    return view('payments.cancel');
})->name('payments.cancel');

Route::get('/admin',[Admincontroller::class,'index'])->name('admin.index');
Route::get('/admin/bookings',[Admincontroller::class,'bookings'])->name('admin.bookings');
Route::get('/admin/packages',[Admincontroller::class,'packages'])->name('admin.packages');
Route::get('/admin/users',[Admincontroller::class,'packages'])->name('admin.users');
});


require __DIR__.'/auth.php';
