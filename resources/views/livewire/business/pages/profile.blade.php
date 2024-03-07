@extends('layouts.business')

@section('content')

<div class="w-full py-10">
    <div class="container px-16">

        <div class="flex flex-row justify-between">

            <div class="flex-1">
                <h1 class="text-4xl font-bold text-gray-800">Your Business Profile</h1>
                <p class="text-lg font-medium pt-3 text-gray-400">Change Your Businesses Public Appearance</p>
            </div>

        </div>
        <div class="w-full mt-10 pb-6 rounded-lg shadow-md bg-white ">


            <div style="padding:32px;">

                <form wire:submit.prevent="updateBusiness">
                    <div class="form-group">
                        <x-mary-input label="Business Name" placeholder="{{ $business->name }}" hint="This is how your business will appear and be searchable" />
                    </div>

                    <div class="form-group pt-3">
                        <x-mary-input label="Business Descriptor" placeholder="{{ $business->specific_description }}" hint="This is the short descriptiont that appears next to your Business Name" />
                    </div>

                    <div class="form-group pt-3">
                        <x-mary-input label="Business Address" placeholder="{{ $business->address }}" hint="Only the Street Number and Name" />
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>


        </div>
    </div>

</div>

@endsection
