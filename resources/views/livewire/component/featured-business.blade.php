<div class="grid grid-cols-3 gap-4 mt-10">
    @foreach ($businesses as $business)
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
