<?php

namespace App\Livewire\Business\Pages;

use Livewire\Component;
use App\Models\Business;

class Team extends Component
{
    public $business;
    public $team;

    public function mount($id)
    {
        $this->business = \App\Models\Business::findOrFail($id);
        $this->loadTeam();
    }

    private function loadTeam()
    {
        $this->team = $this->business->users;
    }

    public function render()
    {
        return view('livewire.business.pages.team')->layout('layouts.business');;
    }
}
