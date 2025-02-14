<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trip Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('trips.index') }}" class="text-indigo-600 hover:text-indigo-900 mb-4 inline-block">
                ← Return to Trips
            </a>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ $trip->title }}</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Destination</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $trip->destination }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <p class="mt-1 text-lg text-gray-900">${{ number_format($trip->price, 2) }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Available Seats</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $trip->available_seats }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Start Date</label>
                        <p class="mt-1 text-lg text-gray-900">{{ \Carbon\Carbon::parse($trip->start_date)->format('M d, Y') }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">End Date</label>
                        <p class="mt-1 text-lg text-gray-900">{{ \Carbon\Carbon::parse($trip->end_date)->format('M d, Y') }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <p class="mt-1 text-lg text-gray-900 capitalize">{{ $trip->status }}</p>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $trip->description }}</p>
                    </div>
                </div>

                {{-- <div class="mt-6 flex justify-end">
                    <a href="{{ route('trips.edit', $trip) }}"
                        class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-2.5">
                        Edit Trip
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
