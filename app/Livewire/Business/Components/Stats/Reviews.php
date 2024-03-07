<?php

namespace App\Livewire\Business\Components\Stats;

use Livewire\Component;
use App\Models\Business;


class Reviews extends Component
{
    public $business;
    public $reviews;
    public $avgRating;

    public function mount($id)
    {
        $this->business = Business::findOrFail($id);
        $this->reviews = $this->business->reviews()->orderBy('created_at', 'desc')->get();
        $this->avgRating = $this->reviews->avg('rating');
    }

    public function render()
    {
        return view('livewire.business.components.stats.reviews');
    }
}
