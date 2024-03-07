<?php

namespace App\Livewire\Business\Pages;

use Livewire\Component;
use App\Models\Business;
use Livewire\Attributes\On;
use Mary\Traits\Toast;
use Masmerise\Toaster\Toaster;

class Products extends Component
{

    use Toast;

    public $business;
    public $products;
    public $productName;
    public $productDescription;
    public $productPrice;

    public function mount($id)
    {
        $this->business = \App\Models\Business::findOrFail($id);
        $this->loadProducts();
    }

    public function createProduct()
    {
        $this->validate([
            'productName' => 'required|string|max:255',
            'productDescription' => 'required|string|max:1000',
            'productPrice' => 'required|numeric|min:0',
        ]);

        $product = $this->business->products()->create([
            'name' => $this->productName,
            'description' => $this->productDescription,
            'price' => $this->productPrice,
        ]);

        // Assuming the business_id is available in the component, you can set it here
        // $product->business_id = $this->businessId;

        $product->save();

        // Optionally, reset the form fields
        $this->reset(['productName', 'productDescription', 'productPrice']);

        // Optionally, show a success message
        $this->success('Product has been created successfully!');
    }


    public function loadProducts()
    {
        $this->products = $this->business->products;
    }
    public function render()
    {
        return view('livewire.business.pages.products')->layout('layouts.business');
    }
}
