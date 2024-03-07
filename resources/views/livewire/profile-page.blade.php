@extends('layouts.guest')

@section('content')

<main class="user-page">

    <div class="w-full my-5">

        <div class="w-3/4 max-w-screen-2xl shadow-sm rounded-md bg-white mx-auto pb-4">

            <div class="profile-background rounded-t-md h-64 bg-gradient-to-r from-red-100 to-fuchsia-300"></div>

            <div class="profile-content w-11/12 h-32 flex flex-row flex-wrapn mx-auto justify-between overflow-visible">
                <div class="flex">
                    <div class="avatar ">
                        <div class="w-52 h-52 -translate-y-1/2 rounded-full ring ring-white ring-offset-base-100 ringoffset-5">
                            <img src="{{ url('storage/'. $user->profile_photo_path) }}" alt="Profile Picture" />
                        </div>
                    </div>
                </div>

                <div class="flex pt-10">
                    @auth
                    @if (Auth::user()->id == $user->id)
                    <a href="{{ route('profile.show') }}">
                        <x-mary-button label="Edit Profile" icon="o-pencil" />
                    </a>
                    @else
                    <x-mary-button label="Message" icon="s-envelope" />
                    @endif
                    @else
                    <x-mary-button label="Message" icon="s-envelope" />
                    @endauth
                    <div class="dropdown dropdown-end">
                        <x-mary-button tabindex="0" role="button" icon="c-ellipsis-vertical" class='ml-3' />
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box mt-2 w-52">
                            <li><x-mary-icon name="m-flag" label="Report User" /></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="w-11/12 mx-auto py-5 flex flex-row justify-between flex-wrap">

                <div class="flex pr-3">
                    <div>
                        <h2 class="text-4xl font-semibold text-gray-700">{{ $user->name }}</h2>
                        <p class="py-3 text-lg text-gray-400">
                            {{ $user->description }}
                        </p>
                        <div class="flex flex-row justify-between">
                            <div class="flex pr-3">
                                <span class="text-lg text-gray-400"><x-mary-icon name="o-map-pin" class="w-6 h-6 -translate-y-1 text-gray-500" />Columbus, OH</span>
                            </div>
                            <div class="flex pl-3">
                                <span class="text-lg text-gray-400"><x-mary-icon name="s-calendar-days" class="w-6 h-6 -translate-y-1 text-gray-500" /> Joined {{ $cleanDate }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex">
                        <div class="flex flex-col py-3 px-7 mx-2 rounded-md bg-gray-200  justify-center ">
                            <span class="text-4xl font-bold text-gray-700 text-left">0</span>
                            <span class="text-lg text-gray-700 text-left">Purchases</span>
                        </div>
                        <div class="flex flex-col py-3 px-7 ml-1 rounded-md bg-gray-200  justify-center ">
                            <span class="text-4xl font-bold text-gray-700 text-left">
                                {{ $user->reviews->count() }}
                            </span>
                            <span class="text-lg text-gray-700 text-left">Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-11/12 mx-auto py-4">

                <h2 class="text-2xl font-bold text-gray-900">Reviews<h2>

                        <div class="flex flex-wrap w-full justify-between mt-4 gap-4">
                            @if($user->reviews->count() == 0)
                            <p class="text-gray-400">User hasn't submitted any reviews</p>
                            @else
                            @foreach($user->reviews as $review)
                            <div class="card w-1/4 flex flex-auto transition-shadow bg-base-100 shadow-xl">
                                <a class="" href="{{ url('/b/' . $review->user->id) }}">
                                    <div class="card-body text-left">
                                        <h2 class="card-title">

                                            <div class="avatar">
                                                <div class="w-16 rounded-full">
                                                    <img src="{{ $review->user->profile_photo_url }}" />
                                                </div>
                                            </div>

                                            <span class="pl-2">
                                                {{ $review->user->name}}
                                                <div class="">
                                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$review->rating)
                                                        <x-mary-icon name="s-star" class="w-5 h-5 text-gray-500 rounded-lg" />
                                                        @else
                                                        <x-mary-icon name="o-star" class="w-5 h-5 text-gray-500 rounded-lg" />
                                                        @endif
                                                        @endfor
                                                </div>
                                            </span>
                                        </h2>


                                        <h2 class="mt-3 text-xl font-bold">
                                            {{$review->business->name}}
                                            <span class="text-sm font-semibold text-gray-500">
                                                {{$review->business->specific_description}}
                                            </span>
                                        </h2>

                                        <p class="pt-2">

                                            {{ $review->comment }}

                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>
            </div>
        </div>
</main>
@endsection
