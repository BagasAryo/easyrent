<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - EasyRent
|--------------------------------------------------------------------------
*/

// 1. PUBLIC / GUEST ROUTES
Route::livewire('/', 'pages::public.welcome')->name('home');


// 2. USER / CUSTOMER AREA
Route::middleware(['auth', 'verified'])->prefix('user')->name('user.')->group(function () {
    Route::livewire('/dashboard', 'pages::user.dashboard')->name('dashboard');
    Route::livewire('/bookings', 'pages::user.bookings.index')->name('bookings.index');
});


// 3. ADMIN AREA
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::livewire('/dashboard', 'pages::admin.dashboard')->name('dashboard');
    Route::livewire('/cars', 'pages::admin.cars.index')->name('cars.index');
    Route::livewire('/bookings', 'pages::admin.bookings.index')->name('bookings.index');
});


// Redirector untuk rute 'dashboard' bawaan authentication
Route::middleware(['auth', 'verified'])->get('dashboard', function () {
    if (auth()->user()?->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
})->name('dashboard');


// Settings & Profile routes bawaan Starter Kit
require __DIR__.'/settings.php';
