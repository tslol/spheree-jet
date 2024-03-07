<?php

namespace App\Livewire;

use Livewire\Component;

class Rating extends Component
{
    public string $rating;

    public function mount($rating)
    {
        $this->rating = $rating;
    }

    public function render()
    {
        return view('livewire.components.rating');
    }
}
