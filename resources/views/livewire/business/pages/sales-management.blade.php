@extends('layouts.business')

@section('content')

<div class="w-full py-10">
    <div class="container px-16">

        <div class="flex flex-row justify-between">

            <div class="flex-1">
                <h1 class="text-4xl font-bold text-gray-800">Your Sales Management</h1>
                <p class="text-lg font-medium pt-3 text-gray-400">Manage your overall sales here</p>
            </div>

        </div>

        <div class="w-full mt-10">

            <div class="w-full p-6">

                <div class="flex flex-row justify-between bg-white rounded-lg shadow-md p-10 mb-10">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-gray-800">
                            Sales Tracking
                        </h1>
                        <p class="text-lg font-medium pt-3 text-gray-400">Track your sales progress and achievements</p>
                    </div>
                    <div class="flex-1">
                        <button class="btn btn-primary float-right btn-lg mt-2">View Details</button>
                    </div>
                </div>

                <div class="flex flex-row justify-between bg-white rounded-lg shadow-md p-10 mb-10">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-gray-800">
                            Reports and Analytics
                        </h1>
                        <p class="text-lg font-medium pt-3 text-gray-400">Understand your sales data and get insights</p>
                    </div>
                    <div class="flex-1">
                        <button class="btn btn-primary float-right btn-lg mt-2">View Report</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection