<div class="w-full bg-white">


    <div class="container w-3/4 px-10 mx-auto">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <a href="{{ route('dashboard') }}">
                            <x-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a href="{{ route('home') }}">
                                Features
                            </a>
                        </li>
                        <li>
                            <a>Categories</a>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>
                                For Businesses
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('home') }}">
                    <x-application-mark class="block h-9 w-auto" />
                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Features</a></li>
                    <li>
                        <details>
                            <summary>Categories</summary>
                            @livewire('component.nav-categories')
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>For Businesses</summary>
                            <ul class="p-2">
                                <li><a>Join Spheree</a></li>
                                <li><a>Solutions</a></li>
                                <li><a>Testimonials</a></li>
                                <li><a>Pricing</a></li>
                                <li><a>Contact</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
            <div class="navbar-end">
                @if(request()->is('/'))
                    <span></span>
                @elseif(request()->is('search'))
                    <span></span>
                @else
                    <a href="{{ route('home') }}">
                        <x-mary-icon name="m-magnifying-glass" class="w-10 h-10 mt-2 hover:bg-gray-100 text-gray-500 mr-2 p-2 rounded-full" />
                    </a>
                @endif

                @auth
                <div class="dropdown dropdown-hover dropdown-end">
                    <div class="avatar" role="button" tabindex="0">
                      <div class="w-10 rounded-full translate-y-1">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                      </div>
                    </div>
                  <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="{{ url('/p/' . optional(Auth::user())->id)  }}">View Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('billing') }}">Billing</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.show') }}">Account Settings</a>
                    </li>
                    @foreach($businesses as $business)
                        <li>
                            <a href="/a/{{ $business->id }}">Manage {{ $business->name }}</a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ route('business.create') }}">Create Business</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">Logout</a>
                        </form>
                    </li>
                  </ul>
                </div>
                @else
                    <a
                        class="btn btn-ghost mr-1"
                        href="{{ route('login') }}"
                    >Sign In</a>
                    <a
                        class="btn ml-1"
                        href="{{ route('register') }}"
                    >Sign Up</a>
                @endauth

            </div>
        </div>
    </div>
</div>
