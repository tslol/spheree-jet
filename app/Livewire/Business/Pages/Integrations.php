<?php

namespace App\Livewire\Business\Pages;

use Livewire\Component;
use App\Models\Business;

class Integrations extends Component
{
    public $business;

    public function moutn($id) {
        $this->business = Business::find($id);
    }

    public function render()
    {
        return view('livewire.business.pages.integrations')->layout('layouts.business');
    }
}
