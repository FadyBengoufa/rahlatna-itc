<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="my-4">
                <x-label for="role" value="{{ __('Register as') }}" class="mb-2 block text-sm font-medium text-gray-700" />
            
                <div class="flex justify-between gap-8">
                    <!-- Traveler Option -->
                    <div class="flex-1">
                        <input type="radio" id="traveler" name="role" value="traveler" class="hidden peer/traveler" checked>
                        <label for="traveler"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg cursor-pointer peer-checked/traveler:bg-[#001E3DD9] peer-checked/traveler:text-white peer-checked/traveler:border-[#001E3DD9] hover:bg-gray-100 w-full justify-center">
                            Traveler
                        </label>
                    </div>
            
                    <!-- Agency Option -->
                    <div class="flex-1">
                        <input type="radio" id="agency" name="role" value="agency" class="hidden peer/agency">
                        <label for="agency"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg cursor-pointer peer-checked/agency:bg-[#001E3DD9] peer-checked/agency:text-white peer-checked/agency:border-[#001E3DD9] hover:bg-gray-100 w-full justify-center">
                            Agency
                        </label>
                    </div>
                </div>
            </div>
            
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

             <!-- Role Selection -->
            {{-- <div class="mt-4">
                <x-label for="role" value="{{ __('Register as') }}" />
                <div class="flex items-center mt-2">
                    <input type="radio" id="traveler" name="role" value="traveler" class="text-[#001E3DD9] focus:ring-[#001E3DD9]" checked>
                    <label for="traveler" class="ml-2 text-sm text-gray-700">Traveler</label>
                </div>
                <div class="flex items-center mt-2">
                    <input type="radio" id="agency" name="role" value="agency" class="text-[#001E3DD9] focus:ring-[#001E3DD9]">
                    <label for="agency" class="ml-2 text-sm text-gray-700">Travel Agency</label>
                </div>
            </div> --}}

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
