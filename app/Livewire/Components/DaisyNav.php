<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DaisyNav extends Component
{
    public $user;
    public $businesses;

    public function mount()
    {
        if(Auth::check()) {
        $this->user = Auth::user();
        $this->businesses = $this->user->ownedBusinesses;
        }

    }

    public function render()
    {
        return view('livewire.components.daisy-nav');
    }
}
