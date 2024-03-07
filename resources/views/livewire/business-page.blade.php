@extends('layouts.guest')

@section('content')
        <div class="container w-3/4 mt-10 mx-auto">

            <div class="business-top">
                <div class="back">
                    <x-mary-button label="Back" icon="o-arrow-long-left" wire:click="back" class="btn-ghost" />
                </div>

                <div class="w-full my-10">

                    <img src="{{ $logo }}" style="width:400px;height:150px;" class="mx-auto">

                        s             </div>
            </div>

            <div class="business-images mx-auto mt-10">
                <div>

                    <livewire:image-gallery :images="$images" class="h-40 rounded-box" />
                </div>

            </div>

            <div class="business-info mx-auto mt-10">

                <div class="w-full flex flex-row gap-2">

                    <div class="w-3/4">
                        <h1 class="text-4xl font-bold text-gray-800">{{ $business->name }} <span class="text-xl font-semibold text-gray-400">{{ $business->specific_description }}</span></h1>
                        <p class="text-lg font-semibold text-gray-800 pt-2">{{ $business->address }}, {{ $business->city }}, {{ $business->state }} {{ $business->zip }}</p>
                        <livewire:rating :rating="$business->rating" />
                        <div class="text-gray-600 font-semibold text-lg py-3 pr-3 leading-relaxed">
                            {!! $business->description !!}
                        </div>
                    </div>

                    <div class="w-1/4">
                        <div class="flex flex-col gap-2">
                            <x-mary-button label="Message" icon="s-envelope" class="btn-primary text-white" />
                            @livewire('make-review', ['id' => $business->id])
                            <x-mary-button label="View Menu" icon="o-document-text" class="btn-outline" />
                            <x-mary-button label="Get Directions" icon="o-map" class="btn-outline" />
                            <x-mary-button label="Compare Competitors" icon="o-chart-bar" class="btn-outline" />
                            <x-mary-button label="Share" icon="s-share" class="btn-outline" />

                            <div class="open w-full bg-gray-200 rounded-lg my-3">
                                <div class="p-4">
                                    <h3 class="text-3xl font-bold text-gray-800">Hours</h3>
                                    <div class="flex flex-col">
                                        <div class=" overflow-x-auto text-left">
                                            <div class="py-2 align-middle inline-block min-w-full">
                                                <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-200">
                                                        <tbody class="divide-y divide-gray-200 text-left">
                                                            <!-- Repeat this row for each day of the week -->
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Monday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    9:00 AM - 5:00 PM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Tuesday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    9:00 AM - 5:00 PM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Wednesday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    9:00 AM - 5:00 PM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Thursday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    9:00 AM - 5:00 PM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Friday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    9:00 AM - 5:00 PM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Saturday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    Closed
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="py-1 whitespace-nowrap text-md text-gray-500">
                                                                    Sunday
                                                                </td>
                                                                <td class="py-1 text-right whitespace-nowrap text-md text-gray-500">
                                                                    Closed
                                                                </td>
                                                            </tr>
                                                            <!-- Add more rows as needed -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @livewire('business-reviews', ['id' => $business->id])

            </div>
@endsection
