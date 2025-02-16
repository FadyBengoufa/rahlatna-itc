<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TravelerTripController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Auth;
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
        /** @var \App\Models\User */
        $user = Auth::user();
        if ($user->isAgency()) {
            return redirect()->route('trips.index');
        } elseif ($user->isTraveler()) {
            return redirect()->route('traveler.trips.index');
        }
        // return view('dashboard');
    })->name('dashboard');

    // Agency routes
    Route::prefix('agency')
        ->middleware('isAgency')
        ->group(function () {
            Route::get('trips', [TripController::class, 'index'])->name('trips.index');
            Route::get('trips/create', [TripController::class, 'create'])->name('trips.create');
            Route::post('trips', [TripController::class, 'store'])->name('trips.store');
            Route::get('trips/{trip}', [TripController::class, 'show'])->name('trips.show');
            Route::get('booked-trips', [TripController::class, 'bookedTrips'])->name('trips.bookings');
    });

    Route::prefix('traveler')
        ->middleware('isTraveler')
        ->group(function () {
            Route::get('trips', [TravelerTripController::class, 'index'])->name('traveler.trips.index');
            Route::get('trips/{trip}', [TravelerTripController::class, 'show'])->name('traveler.trips.show');
            Route::post('trips/{trip}/book', [BookingController::class, 'bookTrip'])->name('traveler.trips.book');
            Route::get('bookings', [BookingController::class, 'index'])->name('traveler.bookings.index');
    });
});
Route::get('/features', function () {
    return view('features');
})->name('features');