<x-form-section submit="updateDesc">

    <x-mary-toast/>

    <x-slot name="title">
        {{ __('Edit Bio') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Change the text that is visible on your profile page') }}
    </x-slot>
    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-mary-textarea
                label="Bio"
                wire:model="bio"
                placeholder="{{ $desc }}"
                hint="Max 250 chars"
                rows="5"
                inline
                class="w-full">


            </x-mary-textarea>
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
