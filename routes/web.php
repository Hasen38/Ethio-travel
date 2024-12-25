<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Travelcontroller;
use App\Http\Controllers\ProfileController;

Route::get('/', [Travelcontroller::class,'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::view('/home', 'home');
Route::get('/travel/{id}',[Travelcontroller::class,'show'])->name('travel.show');
Route::get('/bookings/{id}',[Travelcontroller::class,'Makebooking'])->name('travel.book');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
