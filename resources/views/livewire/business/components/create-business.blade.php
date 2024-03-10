@php
    $businessTypes = [
        [
            'id' => 1,
            'name' => 'Sole Proprietorship'
        ],
        [
            'id' => 2,
            'name' => 'LLC',
        ],
        [
            'id' => 3,
            'name' => 'C Corp',
        ],
        [
            'id' => 4,
            'name' => 'S Corp',
        ]
    ];

    $businessIndustry = App\Models\Category::all();
@endphp
<div class="w-2/4 mx-auto">
    <div class="w-full">
        <x-mary-form wire:submit="save">
            <x-mary-input label="Business Name" wire:model="businessName" />
            <x-mary-select label="Business Type" placeholder="Select an Business Type" :options="$businessTypes" wire:model="businessType"/>
            <x-mary-select label="Business Type" placeholder="Select an Industry" :options="$businessIndustry" wire:model="businessIndustry"/>
            <x-mary-textarea label="Address" wire:model="address" />

            <x-mary-input label="Business Website" wire:model="businessWebsite" />
            <x-mary-input label="Business Phone" wire:model="businessPhone" />
            <x-mary-input label="Business Email" wire:model="businessEmail" />

            <x-mary-input label="Year Established" wire:model="businessCreationDate" />

            <x-mary-button type="submit" class="btn btn-primary">Create Business</x-mary-button>
        </x-mary-form>
    </div>
</div>
