<?php

namespace App\Livewire;

use Livewire\Component;

class ProfilePage extends Component
{
    public $user;
    public $reviews;
    public $reviewCheck = false;
    public $cleanDate;
    public function mount($id)
    {
        $this->user = \App\Models\User::findOrFail($id);
        $this->cleanDate = $this->user->created_at->format('F Y');
        $this->reviews = $this->user->reviews()->orderBy('created_at', 'desc')->get();
        $this->reviewCheck = $this->reviews->count() > 0;
    }

    public function render()
    {
        return view('livewire.profile-page');
    }
}
