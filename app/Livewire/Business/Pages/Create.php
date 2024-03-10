<?php

namespace App\Livewire\Business\Pages;

use App\Models\Business;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\BusinessUser;

class Create extends Component
{

    public $isBusinessOwner = false;
    public $isBusinessInReview = false;

    public function mount() {

        $user = Auth::user();
        $check = BusinessUser::where('user_id', $user->id)->first();
        if($check) {
            $this->isBusinessOwner = true;
            if($check->business->in_review == 1) {
                $this->isBusinessInReview = true;
            }
        }

    }

    public function render()
    {
        return view('livewire.business.pages.create')->layout('layouts.guest');
    }
}
