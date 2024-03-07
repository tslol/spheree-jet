<?php

namespace App\Livewire\Business;

use Livewire\Component;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class Show extends Component
{

    public $business;


    public function mount($id)
    {
        $this->business = \App\Models\Business::findOrFail($id);
    }



    public function render()
    {
        return view('livewire.business.show')->layout('layouts.business');
    }
}
