@extends('layouts.guest')

@section('content')

    <div class="container w-3/4 mt-10 mx-auto">

        <div class="business-top">
            <div class="back">
                <x-mary-button label="Back" icon="o-arrow-long-left" wire:click="back" class="btn-ghost" />
            </div>
        </div>

        <div class="w-full my-10">

            <h1 class="text-4xl font-bold text-gray-800">Create New Review</h1>

            <p class="py-5">Please note that all reviews are subject to our TOS rules and may be removed if they are considered to be breaking them.
                If you have any questions about our TOS, please visit our TOS page.</p>

            <br/>

            <form wire:submit.prevent="submitReview" class="w-full">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="rating" class="text-lg font-semibold text-gray-800">Rating</label>
                        <div class="rating rating-lg">
                          <input type="radio" name="rating-9" class="mask mask-star-2" />
                          <input type="radio" name="rating-9" class="mask mask-star-2" checked />
                          <input type="radio" name="rating-9" class="mask mask-star-2" />
                          <input type="radio" name="rating-9" class="mask mask-star-2" />
                          <input type="radio" name="rating-9" class="mask mask-star-2" />
                        </div>
                    </div>
                    <br/>
                    <div class="flex flex-col gap-2">
                        <label for="review" class="text-lg font-semibold text-gray-800">Review</label>
                        <textarea wire:model="review" class="w-full h-40 border border-gray-300 rounded-lg p-4" placeholder="Write your review here..."></textarea>
                    </div>
                    <br/>
                    <x-mary-button class="btn btn-outline" type="submit" label="Submit Review"/>

                </div>
            </form>
        </div>

    </div>

@endsection
