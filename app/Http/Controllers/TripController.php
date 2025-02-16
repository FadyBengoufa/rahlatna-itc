<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::query()
                    ->whereHas('agency', function ($query) {
                        $query->where('user_id', auth()->user()->id);
                    })
                    ->get();
        return view('agency.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agency.trips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'destination' => 'required|string',
            'price' => 'required|string',
            'available_seats' => 'required',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Trip::create(array_merge(
            $request->all(),
            ['user_id' => auth()->user()->id]
        ));

        return redirect()->route('trips.create')->with('success', 'Trip created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        $trip = Trip::findOrFail($trip->id);

        return view('agency.trips.show', compact('trip'));
    }

    public function bookedTrips()
    {
        $trips = Trip::with('bookings.traveler')
            ->where('user_id', auth()->user()->id)
            ->has('bookings')
            ->get();

        return view('agency.bookings', compact('trips'));
    }
}
