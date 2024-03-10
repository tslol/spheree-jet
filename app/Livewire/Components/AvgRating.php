<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Business;

class AvgRating extends Component
{
    public $business;
    public $reviews;
    public $avgRating;

    public function mount($id){
        $this->business = Business::findOrFail($id);
        $this->reviews = $this->business->reviews()->orderBy('created_at', 'desc')->get();
        $this->avgRating = $this->reviews->avg('rating');
    }

    public function render()
    {
        return view('livewire.components.avg-rating');
    }
}
