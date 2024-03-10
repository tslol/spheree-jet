@extends('layouts.guest')

@section('content')

    <div class="container w-3/4 mt-10 mx-auto">

        <h1 class="text-4xl font-bold">{{$this->businessOne->name}} And {{$this->businessTwo->name}}</h1>
        <div class="py-5">
            <h2 class="text-2xl font-semibold">Quick Summary</h2>
            <p class="py-1">
                {!! $sectionOne !!}
            </p>
        </div>

        <div class="py-5">

            <h2 class="text-2xl font-semibold">More Information</h2>

            <div class="container mx-auto py-10">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="card shadow-md bg-white rounded-md p-6">
                        <h2 class="text-xl font-medium mb-4">Return Policies</h2>
                        <div class="mb-4">
                            <p class="font-bold py-1">{{$this->businessOne->name}}</p>
                            <p class="py-1">If you are dissatisfied with the quality of your food (e.g., undercooked, overcooked, incorrect ingredients), please notify your server immediately. We will gladly replace the item or offer a refund at our discretion.</p>
                            <a href="#" class="py-1 text-blue-800 underline">Learn More</a>
                        </div>
                        <div class="mb-4">
                            <p class="font-bold py-1">{{$this->businessTwo->name}}</p>
                            <p class="py-1">Please check your takeout order for accuracy before leaving the restaurant. If there are any errors, please bring them to our attention immediately for resolution.</p>
                            <a href="#" class="py-1 text-blue-800 underline">Learn More</a>
                        </div>

                    </div>

                    <div class="card shadow-md bg-white rounded-md p-6">
                        <h2 class="text-xl font-medium mb-4">Average Price Points</h2>
                        <div class="mb-4">
                            <p class="font-bold py-1">{{$this->businessOne->name}}</p>
                            <p class="py-1">Prices can range anywhere from $5 - $20, with an average cost of $8.90 per meal</p>
                            <a href="#" class="py-1 text-blue-800 underline">Learn More</a>
                        </div>
                        <div class="mb-4">
                            <p class="font-bold py-1">{{$this->businessTwo->name}}</p>
                            <p class="py-1">Prices can range anywhere from $9 - $25, with an average cost of $15.40 per meal</p>
                            <a href="#" class="py-1 text-blue-800 underline">Learn More</a>
                        </div>
                    </div>

                    <div class="card shadow-md bg-white rounded-md p-6">
                        <h2 class="text-xl font-medium mb-4">Most Popular Items</h2>
                        <div class="mb-4">
                            <p class="font-bold py-1">{{$this->businessOne->name}}</p>
                            <p class="py-1">
                                <ul>
                                    <li class="py-1 underline">
                                        <a href="#">Crispy Chicken Sandwich - $15.00</a>
                                    </li>
                                    <li class="py-1 underline">
                                        <a href="#">Columbus Cheese Steak - $16.00</a>
                                    </li>
                                    <li class="py-1 underline">
                                        <a href="#">Italian Grinder - $16.00</a>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="mb-4">
                            <p class="font-bold py-1">{{$this->businessTwo->name}}</p>
                            <p class="py-1">
                            <ul>
                                <li class="py-1 underline">
                                    <a href="#">Katzinger's Reuben - $12.00</a>
                                </li>
                                <li class="py-1 underline">
                                    <a href="#">Ari's Open Door - $10.25</a>
                                </li>
                                <li class="py-1 underline">
                                    <a href="#">Jimmy’s Photo Finish - $13.35</a>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row gap-4 py-4">
                <div class="flex">
                    @livewire('components.avgRating, ['id' => $businessOne->id ])
                </div>
                <div class="flex">
                    @livewire('components.avgRating, [ 'id' => $this->businessTwo->id ])
                </div>
            </div>




            <div class="flex flex-row justify-between py-4">

                <div class="flex">
                    @livewire('business.components.stats.reviews', ['id' => $businessOne->id ])
                </div>

                <div class="flex">
                    @livewire('components.avgRating', ['id' => $businessTwo->id ])
                </div>

            </div>

        </div>

    </div>


@endsection
