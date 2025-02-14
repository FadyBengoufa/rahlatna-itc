<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4">
            @if ($trips->isEmpty())
                <p class="text-gray-500">You have no bookings yet.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($trips as $trip)
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <img src="https://picsum.photos/id/234/300/300" alt="Trip Image"
                                class="w-full h-48 object-cover">
                            <div class="px-5 py-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $trip->title }}</h5>
                                </a>

                                <!-- Price Details -->
                                <div class="mt-4 flex justify-between text-sm text-gray-500">
                                    <span>📍 Destination: {{ $trip->destination }}</span>
                                    <span>🗓 Duration:
                                        {{ $trip->start_date->diffInDays($trip->end_date) }}
                                        days</span>
                                </div>

                                <div class="flex items-center justify-between mt-4">
                                    <span
                                        class="text-3xl font-bold text-gray-900 dark:text-white">${{ $trip->price }}</span>
                                </div>

                                <!-- View Travelers Button -->
                                <div class="mt-4">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        data-modal-toggle="modal-{{ $trip->id }}">
                                        View Travelers
                                        <span
                                            class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                                            {{ $trip->bookings->count() }}
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <!-- Modal for Travelers -->
                        <div id="modal-{{ $trip->id }}"
                            class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50">
                            <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-semibold">Travelers for {{ $trip->title }}</h3>
                                    <button type="button" class="text-gray-500" data-modal-toggle="modal-{{ $trip->id }}">
                                        <span class="font-bold text-lg">&times;</span>
                                    </button>
                                </div>
                                <div class="mt-4">
                                    <ul class="space-y-2">
                                        @foreach ($trip->bookings as $tripBooking)
                                            <li class="border-b pb-2">
                                                <p class="font-medium">{{ $tripBooking->traveler->name }}</p>
                                                <p class="text-sm text-gray-500">{{ $tripBooking->traveler->email }}
                                                </p>
                                                <p class="text-sm text-gray-500">Number of tickets:
                                                    {{ $tripBooking->number_of_travelers }}</p>
                                                <p class="text-sm text-gray-500">Total Price:
                                                    ${{ $tripBooking->total_price }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="mt-4">
                                    <button type="button" class="bg-gray-500 text-white py-2 px-3 text-sm rounded-md"
                                        data-modal-toggle="modal-{{ $trip->id }}">
                                        Close
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <script>
        // Toggle modal visibility
        const modalToggles = document.querySelectorAll('[data-modal-toggle]');
        modalToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const modalId = toggle.getAttribute('data-modal-toggle');
                const modal = document.getElementById(modalId);
                modal.classList.toggle('hidden');
            });
        });
    </script>

</x-app-layout>
