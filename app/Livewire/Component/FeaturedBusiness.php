<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Business;

class FeaturedBusiness extends Component
{
    public $businesses;

    public function mount()
    {
        $this->businesses = Business::take(4)->get();
    }

    public function render()
    {
        return view('livewire.component.featured-business');
    }
}
