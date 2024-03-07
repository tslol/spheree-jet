@extends('layouts.business')

@section('content')

<div class="w-full py-10">
    <div class="container px-16">

        <div class="flex flex-row justify-between">

            <div class="flex-1">
                <h1 class="text-4xl font-bold text-gray-800">Your Business Integrations</h1>
                <p class="text-lg font-medium pt-3 text-gray-400">Connect your business to other services</p>
            </div>

        </div>

        <div class="w-full mt-10">

            <div class="w-full p-6">

                <div class="flex flex-row justify-between bg-white rounded-lg shadow-md p-10 mb-10">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-gray-800">
                            <img class="w-32" src="https://cdn.worldvectorlogo.com/logos/zapier-2.svg"/>
                        </h1>
                        <p class="text-lg font-medium pt-3 text-gray-400">Add Spheree into your daily integrations and automations</p>
                    </div>
                    <div class="flex-1">
                        <button class="btn btn-primary float-right btn-lg mt-2">Connect</button>
                    </div>
                </div>

                <div class="flex flex-row justify-between bg-white rounded-lg shadow-md p-10 mb-10">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-gray-800">
                            Quickbooks
                        </h1>
                        <p class="text-lg font-medium pt-3 text-gray-400">Integrate Sphere directly into your accounting</p>
                    </div>
                    <div class="flex-1">
                        <button class="btn btn-primary float-right btn-lg mt-2">Connect</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
