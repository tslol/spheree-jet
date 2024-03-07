<div>
    <x-mary-button label="Create New Product" onclick="modalProductCreate.showModal()" />

    <x-mary-modal id="modalProductCreate" title="Create New Product">

        <form wire:submit.prevent="createProduct" method="POST">
            @csrf
            <div class="form-group">
                <x-mary-input label="Product Name" placeholder="Your Products Name" hint="This can be changed later" wire:model="productName" />
                <br />
                <x-mary-textarea label="Product Description" wire:model="productDescription" placeholder="What is your product" hint="Max 1000 chars" rows="5" />
                <br />
                <x-mary-input label="Product Price" placeholder="Your Products Price" hint="This can be changed later" wire:model="productPrice" />


            </div>

            <x-slot:actions>
                <x-mary-button label="Create" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </form>


    </x-mary-modal>
</div>
