
@extends('layouts.guest')

@section('content')

@php
$locations = App\Models\Locations::take(5)->get();
@endphp

<div class="w-full py-5 bg-cover" style="background-image: url('{{ URL::asset('/storage/images/back.png') }}');">

    <div class="container py-10 mx-auto">
        <div class="w-3/4 p-5 bg-gray-100 mx-auto rounded-lg">
            <h1 class="text-4xl pt-2 font-bold text-gray-800">Find the best local businesses</h1>
            <p class="text-xl py-2 font-semibold text-gray-600">Search for the best local businesses in your area</p>
            <form method="get" action="search">
            <div class="mt-2">
                <form method="get" action="search">
                <x-mary-input placeholder="Search for a business" value="{{ $term }}" name="term" class="w-full z-2 border-solid border-y-2 border-x-0 border-gray-200 !outline-none focus:border-gray-200 focus:ring-0 py-3">
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
                    <h1 class="text-4xl font-bold text-gray-800">Results</h1><p>
                        <span>{{ count($result) }}</span>

                        @if(count($result) == 1)
                            <span>Result</span>
                        @else
                            <span>Results</span>
                        @endif
                        found
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-10">
                @if(count($result) == 0)
                    <p>No results found</p>
                @endif
                @foreach ($result as $business)
                <a href="{{ url('/b/' . $business->id) }}" >
                    <div class="card hover:shadow-none transition-shadow w-full bg-base-100 shadow-xl">
                        <figure class="px-3 pt-3">
                            <!-- Use json_decode with true to get an array -->
                            <img src="{{ json_decode($business->images, true)['images'][0] ?? 'https://via.placeholder.com/150' }}" alt="{{ $business->name }}" class="rounded-xl">
                        </figure>
                        <div class="card-body text-left">
                            <h2 class="-translate-y-3 -translate-x-4 card-title text-left text-2xl">{{ $business->name }}</h2>
                            <p class=" absolute mt-6 -ml-4 text-gray-500 -translate-y-1 text-lg">{{ $business->specific_description }}</p>
                            <div class="absolute bottom-8 right-3 text-gray-600">
                                <x-mary-icon  name="m-chevron-right" class="w-7 h-7"/>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

        </div>
    </div>
</div>
@endsection
