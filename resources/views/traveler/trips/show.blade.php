<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trip Details for Travelers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ Auth::user()->isTraveler() ? route('traveler.trips.index') : route('trips.index') }}"
                class="text-indigo-600 hover:text-indigo-900 mb-4 inline-block">
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
                        <p class="mt-1 text-lg text-gray-900">
                            {{ \Carbon\Carbon::parse($trip->start_date)->format('M d, Y') }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">End Date</label>
                        <p class="mt-1 text-lg text-gray-900">
                            {{ \Carbon\Carbon::parse($trip->end_date)->format('M d, Y') }}</p>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $trip->description }}</p>
                    </div>
                </div>

                <!-- Book Now Button -->
                <div class="mt-6 flex justify-end" x-data="{
                    openModal: false,
                    numTravelers: 1,
                    pricePerTraveler: {{ $trip->price }},
                    get totalPrice() { return this.numTravelers * this.pricePerTraveler; }
                }">
                    @if(!auth()->user()->bookedTrips->contains($trip))
                        <button @click="openModal = true"
                            class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-2.5">
                            Book Now
                        </button>
                    @else
                        <p class="text-green-600">Thank you for booking this trip!</p>
                    @endif
                    <div x-cloak x-show="openModal"
                        class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50">
                        <div class="bg-white rounded-lg p-6 max-w-md mx-auto shadow-lg"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
                            <h2 class="text-lg font-semibold mb-4">Book Your Trip</h2>

                            <form action="{{ route('traveler.trips.book', $trip) }}" method="POST">
                                @csrf

                                <div class="mb-4">
                                    <label for="number_of_travelers"
                                        class="block text-sm font-medium text-gray-700">Number of Travelers</label>
                                    <input x-model="numTravelers" type="number" id="number_of_travelers"
                                        name="number_of_travelers" min="1" max="{{ $trip->available_seats }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                                    @error('number_of_travelers')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Total Price Display -->
                                <div class="mb-4 text-lg font-semibold">
                                    Total Price: <span class="text-indigo-600">$<span x-text="totalPrice"></span></span>
                                </div>

                                <div class="flex justify-end space-x-4">
                                    <button type="button" @click="openModal = false"
                                        class="text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-lg px-4 py-2">
                                        Cancel
                                    </button>
                                    <button type="submit"
                                        class="text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg px-4 py-2">
                                        Confirm Booking
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
