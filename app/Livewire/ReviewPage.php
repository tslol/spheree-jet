<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class ReviewPage extends Component
{

    public $business;

    public $reviews;

    public $review;

    public function mount($id)
    {
        $this->business = \App\Models\Business::findOrFail($id);

    }

    public function submitReview() {
        $this->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|min:10',
        ]);

        $this->business->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $this->rating,
            'comment' => $this->review,
        ]);

    }

    public function render()
    {
        return view('livewire.review-page');
    }
}
