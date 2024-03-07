<nav x-data="{ open: false }" class="bg-white py-2 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex  w-full justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    @auth
                        <x-nav-link  :active="request()->routeIs('profile.show')">
                            <div class="dropdown dropdown-hover dropdown-bottom dropdown-start">
                              <div tabindex="0" role="button" class="btn m-1">Hover</div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a>Item 1</a></li>
                                <li><a>Item 2</a></li>
                              </ul>
                              <ul tabindex="0" class="dropdown-content z-[1] menu xl:menu-horizontal lg:min-w-max bg-base-200 rounded-box">
                                <li>
                                  <a>Solutions</a>
                                  <ul>
                                    <li><a>Design</a></li>
                                    <li><a>Development</a></li>
                                    <li><a>Hosting</a></li>
                                    <li><a>Domain register</a></li>
                                  </ul>
                                </li>
                                <li>
                                  <a>Enterprise</a>
                                  <ul>
                                    <li><a>CRM software</a></li>
                                    <li><a>Marketing management</a></li>
                                    <li><a>Security</a></li>
                                    <li><a>Consulting</a></li>
                                  </ul>
                                </li>
                                <li>
                                  <a>Products</a>
                                  <ul>
                                    <li><a>UI Kit</a></li>
                                    <li><a>Wordpress themes</a></li>
                                    <li><a>Wordpress plugins</a></li>
                                    <li>
                                      <a>Open source</a>
                                      <ul>
                                        <li><a>Auth management system</a></li>
                                        <li><a>VScode theme</a></li>
                                        <li><a>Color picker app</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a>Company</a>
                                  <ul>
                                    <li><a>About us</a></li>
                                    <li><a>Contact us</a></li>
                                    <li><a>Privacy policy</a></li>
                                    <li><a>Press kit</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                        </x-nav-link>
                        <x-nav-link  :active="request()->routeIs('billing')">
                            {{ __('Features') }}
                        </x-nav-link>
                    @endauth
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
              z                  {{ __('Manage Account') }}
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
