<?php

namespace App\Livewire\Business\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class Nav extends Component
{
    public $businessId;

    public function mount()
    {
        $uri = request()->getRequestUri();
        preg_match('/\/(\d+)/', $uri, $matches);
        $this->businessId = $matches[1] ?? null;
    }
    public function render()
    {
        return view('livewire.business.components.nav');
    }
}
