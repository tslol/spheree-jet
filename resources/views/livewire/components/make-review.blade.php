<div>
    <x-mary-toast />
    <x-mary-button label="Write a Review" icon="o-star" onclick="modalMakeReview.showModal()" class="btn-outline w-full" />

    @if(!$this->loggedIn)
        <x-mary-modal id="modalMakeReview" title="Please Login to write a review">
            <x-slot:actions>
                <x-mary-button label="Login" class="btn-primary mt-5" onclick="modalMakeReview.closeModal(); modalLogin.showModal()" />
            </x-slot:actions>
        </x-mary-modal>
    @else
    <x-mary-modal id="modalMakeReview" title="Write New Review">
        <form wire:submit.prevent="submitReview">
                    Write about your experience, and how it made you feel!
                    <br/>
                    <div class="rating rating-md mt-2">
                        @for ($i =   1; $i <=   5; $i++)
                            <input type="radio" id="rating-{{ $i }}" name="rating" value="{{ $i }}" wire:model="rating" class="mask mask-star-2" />
                        @endfor
                    </div>
                    <textarea class="textarea textarea-bordered w-full h-32 mt-2" wire:model="reviewText" placeholder="Write your review here"></textarea>

                    <x-slot:actions>
                        <x-mary-button label="Submit" class="btn-primary" type="submit" wire:click="submitReview"/>
                    </x-slot:actions>
                </form>
    </x-mary-modal>

    <script>
        function updateRating(value) {
            @this.set('rating', value);
        }
    </script>
    @endif
</div>
