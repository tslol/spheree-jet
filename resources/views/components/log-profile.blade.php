<div>

    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover">
            </div>
            <div class="mt-4">
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-input-error for="email" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
                <x-input-error for="password" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                <x-input-error for="password_confirmation" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </div>

</div>