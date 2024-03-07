<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;

class EditUser extends Component
{
    public $desc;

    public function mount()
    {
        $this->desc = Auth::user()->description;
    }

    public function render()
    {
        return view('livewire.components.edit-user',
            [
                'desc' => $this->desc
            ]
        );
    }
}
