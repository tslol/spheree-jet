<div class="py-10">

    <h2 class="text-3xl font-bold text-gray-800">Reviews</h2>

<div class="reviews-container py-10">
    @if($reviews->count() >  0)
        <div class="flex flex-wrap w-full justify-between gap-4">
            @foreach($reviews as $review)

                    <div class="card w-1/4 flex flex-auto transition-shadow bg-base-100 shadow-xl">
                        <div class="card-body text-left">
                            <h2 class="card-title">
                                <a class="" href="{{ url('/p/' . $review->user->id) }}" >
                                    <div class="avatar">
                                        <div class="w-16 rounded-full">
                                            <img src="{{ $review->user->profile_photo_url }}" />
                                        </div>
                                    </div>
                                </a>
                                <span class="pl-2">
                                    {{ $review->user->name}}
                                    <div class="">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review->rating)
                                                <x-mary-icon name="s-star" class="w-5 h-5 text-gray-500 rounded-lg"/>
                                            @else
                                                <x-mary-icon name="o-star" class="w-5 h-5 text-gray-500 rounded-lg"/>
                                            @endif
                                        @endfor
                                    </div>
                                </span>
                            </h2>


                        <p class="pt-2">{{ $review->comment }}</p>
                    </div>
                </div>

            @endforeach
        </div>

    @else
        <div class="text-center">
            <p>No Reviews Yet.</p>
        </div>
    @endif
</div>
</div>
