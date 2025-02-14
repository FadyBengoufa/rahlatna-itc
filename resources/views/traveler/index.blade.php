<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trips') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4">
            <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">
                @foreach ($trips as $trip)
                    @include('components.trips.trip-card', ['trip' => $trip])
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
