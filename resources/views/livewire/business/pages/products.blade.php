@extends('layouts.business')

@section('content')

<div class="w-full py-10">
    <div class="container px-16">

        <div class="flex flex-row justify-between">

            <div class="flex-1">
                <h1 class="text-4xl font-bold text-gray-800">Your Products</h1>
                <p class="text-lg font-medium pt-3 text-gray-400">Create, Manage, and Modify your Products here</p>
            </div>

            <div class="flex-2">
                @livewire('business.components.productsCreate')
            </div>
        </div>
        <div class="w-full mt-10">
        @if($products->count() >  0)
                <ul>
                    @foreach ($products as $product)
                        <li>{{ $product->name }} - {{ $product->price }}</li>
                    @endforeach
                </ul>
            @else
                <p>No products found for this business.</p>
            @endif
        </div>
    </div>

</div>

@endsection
