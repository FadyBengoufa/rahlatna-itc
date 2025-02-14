<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4">
            @if ($bookings->isEmpty())
                <p class="text-gray-500">You have no bookings yet.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($bookings as $booking)
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <img src="https://picsum.photos/id/234/300/300" alt="Trip Image" class="w-full h-48 object-cover">
                            <div class="px-5 py-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $booking->trip->title }}</h5>
                                </a>
                                {{-- <div class="space-y-2 mt-4">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Destination: {{ $booking->trip->destination }}</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Duration: {{ $booking->trip->start_date->diffInDays($booking->trip->end_date) }} days</p>
                                </div> --}}
                                <div class="mt-4 flex justify-between text-sm text-gray-500">
                                    <span>📍 Destination : {{ $booking->trip->destination }}</span>
                                    <span>🗓 Duration : {{ $booking->trip->start_date->diffInDays($booking->trip->end_date) }} days</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $booking->total_price }}</span>
                                </div>
                            </div>
                        </div>
                    
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
