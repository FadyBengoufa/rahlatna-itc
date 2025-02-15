<div class="max-w-sm bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
    <img src="https://picsum.photos/id/234/300/300" alt="Trip Image" class="w-full h-48 object-cover">

    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900">{{ $trip->title }}</h3>
        <p class="text-sm text-gray-600 mt-1">By <span class="font-medium text-indigo-600">{{ $trip->agency->name }}</span></p>

        <p class="text-sm text-gray-600 mt-1">{{ $trip->description }}</p>

        <div class="mt-3 flex justify-between items-center">
            <span class="text-indigo-600 font-bold">${{ number_format($trip->price, 2) }}</span>
            <span class="text-gray-500 text-sm">{{ $trip->available_seats }} seats left</span>
        </div>

        <div class="mt-4 flex justify-between text-sm text-gray-500">
            <span>📍 {{ $trip->location }}</span>
            <span>🗓 {{ \Carbon\Carbon::parse($trip->start_date)->format('M d, Y') }} - {{ \Carbon\Carbon::parse($trip->end_date)->format('M d, Y') }}</span>
        </div>

        <div class="mt-4 flex justify-between">
            <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $trip->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                {{ $trip->status === 'published' ? 'Published' : 'Unpublished' }}
            </span>

            @if(Auth::user() && Auth::user()->isTraveler())
                @if(!auth()->user()->bookedTrips->contains($trip))
                    <a href="{{ route('traveler.trips.show', $trip) }}" class="text-indigo-600 text-sm font-medium hover:underline">
                        View Details →
                    </a>
                @else
                    <p class="text-green-600 text-sm font-medium">Trip Booked!</p>
                @endif
            @else
                <a href="{{ route('trips.show', $trip) }}" class="text-indigo-600 text-sm font-medium hover:underline">
                    View Details →
                </a>
            @endif
        </div>
    </div>
</div>

