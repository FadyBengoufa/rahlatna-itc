<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())->latest()->get();
        return view('traveler.bookings', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bookTrip(Request $request, Trip $trip)
    {
        $request->validate([
            'number_of_travelers' => 'required|integer|min:1|max:' . $trip->available_seats,
        ]);

        DB::beginTransaction();

        try {
            Booking::create([
                'trip_id' => $trip->id,
                'user_id' => auth()->id(),
                'number_of_travelers' => $request->number_of_travelers,
                'total_price' => $request->number_of_travelers * $trip->price,
            ]);

            // update trips available seats
            $trip->available_seats -= $request->number_of_travelers;
            $trip->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors([
                'error' => 'Error occurred when booking the trip. Please try again later.',
            ]);
        }

        return redirect()->route('traveler.trips.show', $trip)->with('success', 'Booking successful!');
    }
}
