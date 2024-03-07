@extends('layouts.guest')

@section('content')

@php
$locations = App\Models\Locations::take(5)->get();
@endphp

<div class="w-full py-10 bg-cover" style="background-image: url('{{ URL::asset('/storage/images/back.png') }}');">

    <div class="container py-20 mx-auto">
        <div class="w-3/4 p-10 bg-gray-100 mx-auto rounded-lg">
            <h1 class="text-5xl font-bold text-gray-800">Find the best local businesses</h1>
            <p class="text-xl py-2 font-semibold text-gray-600">Search for the best local businesses in your area</p>
            <form method="get" action="search">
            <div class="mt-5">
                <form method="get" action="search">
                <x-mary-input label="" placeholder="Search for a business" name="term" class="w-full border-solid border-y-2 border-x-0 border-gray-200 !outline-none focus:border-gray-200 focus:ring-0 py-3">
                    <x-slot:prepend>
                        {{-- Add `rounded-r-none` class --}}
                        <x-mary-select icon="o-map-pin" :options="$locations" name="city" class="rounded-r-none border-solid border-y-2 border-l-2 border-r-0 border-gray-200 !outline-none focus:border-gray-200 focus:ring-0 bg-base-200" />
                    </x-slot:prepend>

                    <x-slot:append>
                        {{-- Add `rounded-l-none` class --}}
                        <x-mary-button icon="c-magnifying-glass" class="btn-primary rounded-l-none outline-none" />
                    </x-slot:append>
                </x-mary-input>
                </form>
            </div>
        </div>
    </div>

</div>



<div class="w-full py-5">
    <div class="container py-8 mx-auto">
        <div class="w-3/4 mx-auto">

            <div class="flex flex-row justify-between w-full">
                <div class="flex-1">
                    <h1 class="text-4xl font-bold text-gray-800">Featured Businesses</h1>
                </div>
                <div class="flex-2">
                    <a class="btn btn-ghost "href="" class="pt-2 text-gray-600">See All</a>
                </div>
            </div>

            @livewire('component.featured-business')

        </div>
    </div>
</div>

<div class="w-full py-5">
    <div class="container py-8 mx-auto">
        <div class="w-3/4 mx-auto">

            <div class="flex flex-row justify-between w-full">
                <div class="flex-1">
                    <h1 class="text-4xl font-bold text-gray-800">Featured Categories</h1>
                </div>
                <div class="flex-2">
                    <a class="btn btn-ghost "href="" class="pt-2 text-gray-600">See All</a>
                </div>
            </div>

            @livewire('component.featured-categories')

        </div>
    </div>
</div>


<div class="w-full py-5">
    <div class="container py-8 mx-auto">
        <div class="w-3/4 mx-auto">

            <div class="flex flex-row justify-between w-full">
                <div class="flex-1">
                    <h1 class="text-4xl font-bold text-gray-800">Recommended For You</h1>
                </div>
                <div class="flex-2">
                    <a class="btn btn-ghost "href="" class="pt-2 text-gray-600">See All</a>
                </div>
            </div>

            @livewire('component.featured-business')

        </div>
    </div>
</div>

<div class="w-full py-16">
    <div class="container py-8 mx-auto">
        <div class="w-3/4 mx-auto">

            <div class="mx-auto">
                <h1 class="text-4xl font-bold text-gray-800 text-center">Want to See What Spheree Can Do For Your Business?</h1>
                <p class="text-center text-xl mt-5 text-gray-600">Join Spheree and get your business listed today</p>
                <div class="flex justify-center mt-10">
                    <a href="{{ route('register') }}" class="btn btn-lg mr-1 btn-primary">Get Started For Free</a>
                    <a href="" class="btn btn-lg ml-1 btn-ghost">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
