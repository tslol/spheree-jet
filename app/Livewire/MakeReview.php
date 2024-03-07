<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Mary\Traits\Toast;
use Masmerise\Toaster\Toaster;


class MakeReview extends Component
{
    use Toast;

    public $reviewText;
    public $businessId;
    public $rating = 2;
    public $loggedIn = false;

    protected $listeners = ['submitReview' => 'submitReview'];

    public function mount($id)
    {

        $this->businessId = $id;
        $this->loggedIn = Auth::check();

        Log::info('MakeReview mounted');

    }

    public function updatedRating($value)
        {
            $this->rating = $value;
        }

    public function submitReview()
    {

        Log::info('submitReview method called');

        $existingReview = Review::where('user_id', Auth::id())
            ->where('business_id', $this->businessId)
            ->first();
        if ($existingReview) {
            $this->error('You have already reviewed this business');
        }
        // Submit the new review
        Review::create([
            'user_id' => Auth::id(),
            'business_id' => $this->businessId,
            'comment' => $this->reviewText,
            'rating' => $this->rating,
        ]);

        $this->success('Review has been submitted successfully!');
        $this->reset('reviewText'); // Reset the review text

    }

    public function render()
    {
        return view('livewire.components.make-review');
    }
}
