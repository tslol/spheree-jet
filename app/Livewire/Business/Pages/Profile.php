<?php

namespace App\Livewire\Business\Pages;

use Livewire\Component;
use App\Models\Business;

class Profile extends Component
{
    public $business;

    public $businessName;
    public $businessDescription;
    public $businessAddress;
    public $businessSpecificDescription;


    public function mount($id)
    {
        $this->business = \App\Models\Business::findOrFail($id);
    }

    public function updateBusiness() {
        $this->business->name = $this->businessName;
        $this->business->description = $this->businessDescription;
        $this->business->address = $this->businessAddress;
        $this->business->specific_description = $this->businessSpecificDescription;
        $this->business->save();
    }

    public function render()
    {
        return view('livewire.business.pages.profile')->layout('layouts.business');
    }
}
