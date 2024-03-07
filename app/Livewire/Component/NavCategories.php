<?php

namespace App\Livewire\Component;
use App\Models\Category;
use Livewire\Component;

class NavCategories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::take(5)->get();
    }
    public function render()
    {
        return view('livewire.component.nav-categories');
    }
}
