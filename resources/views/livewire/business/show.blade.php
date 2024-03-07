@extends('layouts.business')

@section('content')

<div class="w-full py-10">
    <div class="container px-16">

        <h1 class="text-4xl font-bold text-gray-800">Overview</h1>
        <p class="text-lg font-medium pt-3 text-gray-400">Here are your analytics for this week</p>

        <div class="flex flex-row flex-wrap pt-5 justify-between gap-7">

            <div class="flex flex-auto p-5 bg-white rounded-lg">
                @livewire('business.components.stats.revenue')
            </div>

            <div class="flex flex-auto p-5 bg-white rounded-lg">
                @livewire('business.components.stats.expenses')
            </div>

            <div class="flex flex-auto p-5 bg-white rounded-lg">
                @livewire('business.components.stats.profit')
            </div>

        </div>

        <div class="flex flex-row flex-wrap pt-5 justify-between gap-7">

            <div class="flex w-3/5 p-5 bg-white rounded-lg">
                @livewire('business.components.stats.socials')
            </div>

            <div class="flex flex-auto p-5 bg-white rounded-lg">
                @livewire('business.components.stats.reviews', ['id' => $business->id])
            </div>


        </div>
        <div class="flex flex-row flex-wrap pt-5 justify-between gap-7">

            <div class="flex flex-auto p-5 bg-white rounded-lg">
                @livewire('business.components.stats.messages')
            </div>

        </div>
    </div>
</div>

@endsection
