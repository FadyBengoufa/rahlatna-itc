<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TravelerTripController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();

        return view('traveler.index', compact('trips'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        $trip = Trip::findOrFail($trip->id);

        return view('traveler.trips.show', compact('trip'));
    }
}
