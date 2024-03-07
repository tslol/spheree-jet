<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Category;

class FeaturedCategories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::take(30)->get();
    }

    public function render()
    {
        return view('livewire.component.featured-categories');
    }
}
