<x-form-section submit="updateDescription">
    <x-slot name="title">
        {{ __('Edit Description') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Change the text that is visible on your profile page') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-mary-textarea
                label="Bio"
                wire:model="bio"
                placeholder="Enter your bio here."
                hint="Max 250 chars"
                rows="5"
                inline
                class="w-full">
                    @if($this->desc)
                        {{ $desc }}
                    @endif
            </x-mary-textarea>
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
