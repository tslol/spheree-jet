<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;
use Mary\Traits\Toast;


class EditUserDesc extends Component
{
    use Toast;

    public $desc;
    public $bio;

    public function mount()
    {
        $this->desc = Auth::user()->description;
    }

    public function updateDesc()
    {
        $this->validate([
            'bio' => 'required|min:10'
        ]);

        $user = User::find(Auth::user()->id);
        $user->description = $this->bio;
        $user->save();

        $this->success('Bio Has Been Updated!');
    }

    public function render()
    {
        return view('livewire.components.edit-user-desc');
    }
}
