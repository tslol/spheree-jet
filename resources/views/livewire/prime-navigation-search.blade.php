<nav x-data="{ open: false }" class="bg-white border-b py-2 border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="w-3/4 max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex 1">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

            </div>

            <div class="flex 1 justify-center">
                <!-- Navigation Links -->
                @php
                    $locations = App\Models\Locations::take(5)->get();
                @endphp

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <x-mary-input label="" placeholder="Search for a business" class="w-full border-solid border-y-2 border-x-0 border-gray-200 !outline-none focus:border-gray-200 focus:ring-0 py-3">
                        <x-slot:prepend>
                            {{-- Add `rounded-r-none` class --}}
                            <x-mary-select icon="o-map-pin" :options="$locations" class="rounded-r-none border-solid border-y-2 border-l-2 border-r-0 border-gray-200 !outline-none focus:border-gray-200 focus:ring-0 bg-base-200" />
                        </x-slot:prepend>

                        <x-slot:append>
                            {{-- Add `rounded-l-none` class --}}
                            <x-mary-button icon="c-magnifying-glass" class="btn-primary rounded-l-none outline-none" />
                        </x-slot:append>
                    </x-mary-input>
                </div>
            </div>

            <div class="flex mt-2.5">
                @auth
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ url('/p/' . optional(Auth::user())->id) }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('billing') }}">
                                {{ __('Billing') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Manage Settings') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$el.closest('form').submit()">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @else
                    <a class="btn btn-outline mx-1" href="{{ route('login') }}">Login</a>
                    <a class="btn mx-1" href="{{ route('register') }}">Register</a>
                @endauth
            </div>


            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0  0  24  24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4  6h16M4  12h16M4  18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6  18L18  6M6  6l12  12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Authentication Links -->
        @guest
            <div class="pt-4 pb-1 border-t border-gray-200">
                <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                    {{ __('Sign In') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                    {{ __('Sign Up') }}
                </x-responsive-nav-link>
            </div>
        @else
            <!-- Your existing code for Responsive Settings Options -->
        @endguest
    </div>
</nav>
