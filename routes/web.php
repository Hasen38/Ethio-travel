<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Stripecontroller;
use App\Http\Controllers\Travelcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

// Route::view('/home', 'home')
    Route::get('/', [Travelcontroller::class,'index'])->name('index');


    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

 Route::get('/travel/{id}',[Travelcontroller::class,'show'])->name('travel.show');
 Route::get('/bookings/{id}',[Travelcontroller::class,'Makebooking'])->name('travel.book');
 Route::post('/bookings/{id}',[Travelcontroller::class,'storeReservation'])->name('travel.store');

 Route::post('/stripe',[Stripecontroller::class,'stripe'])->name('payments.store');
 Route::get('/create',[Stripecontroller::class,'create'])->name('create');
 Route::get('/success',[Stripecontroller::class,'success'])->name('success');
 Route::get('/cancel',[Stripecontroller::class,'cancel'])->name('cancel');
});


require __DIR__.'/auth.php';
