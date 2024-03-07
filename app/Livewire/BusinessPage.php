<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class BusinessPage extends Component
{
    public $business;
    public $reviews;
    public $reviewCheck = false;
    public $images = [
        "https://fakeimg.pl/1200/",
        "https://fakeimg.pl/380x188/",
        "https://fakeimg.pl/388x188/"
    ];

    public $logo = "https://fakeimg.pl/400x150/";

    public function mount($id)
    {
        $this->business = \App\Models\Business::findOrFail($id);
        $this->reviews = $this->business->reviews()->orderBy('created_at', 'desc')->get();

        $raw_images = json_decode($this->business->images, true);

        if (isset($raw_images['images'][0])) {
            $this->images[0] = $raw_images['images'][0];
        }
        if (isset($raw_images['images'][1])) {
            $this->images[1] = $raw_images['images'][1];
        }
        if (isset($raw_images['images'][2])) {
            $this->images[2] = $raw_images['images'][2];
        }

        $logo = $this->business->business_photo_url;

        if ($logo) {
            $this->logo = $logo;
        }

        $this->reviewCheck = $this->reviews->count() > 0;
    }

    public function back() {
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.business-page');
    }
}
