<?php

use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Agency routes
    Route::middleware('role:agency')->prefix('agency')->group(function () {
        Route::resource('trips', TripController::class);
    });

    Route::middleware('role:traveler')->prefix('traveler')->group(function () {
        // Route::get('bookings', [BookingController::class, 'index']);
        // Route::post('trips/{trip}/book', [BookingController::class, 'store']);
        // Route::get('bookings/{booking}', [BookingController::class, 'show']);
        // Route::post('bookings/{booking}/cancel', [BookingController::class, 'cancel']);
    });
});

// Public routes
Route::get('trips', [TripController::class, 'index']);
Route::get('trips/{trip}', [TripController::class, 'show']);