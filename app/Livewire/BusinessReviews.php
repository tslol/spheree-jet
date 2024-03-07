<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Business;

class BusinessReviews extends Component
{

    public $businessId;
    public $reviews;
    public $paginateLinks;
    public $perPage = 5;
    public $page = 1;

    public function mount($id)
    {
        $this->businessId = $id;
        $this->loadReviews();
    }

    public function loadReviews() {

        $business = Business::findOrFail($this->businessId);
        $pagination = $business->reviews()->paginate($this->perPage, ['*'], 'page', $this->page);
        $this->reviews = collect($pagination->items());
        $this->paginateLinks = $pagination->links()->toHtml();
    }

    public function loadMoreReviews() {
        $this->page++;
        $this->loadReviews();
    }

    public function render()
    {
        return view('livewire.components.business-reviews', [
            'reviews' => $this->reviews,
            'paginateLinks' => $this->paginateLinks
        ]);
    }
}
