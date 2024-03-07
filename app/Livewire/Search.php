<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use Laravel\Scout\Scout;
use App\Models\Business;

class Search extends Component
{
    public $term;
    public $city;
    public $result;

    public function mount()
    {
        $this->term = Request::query('term');
        $this->city = Request::query('city');

        //dd($this->term);

        $this->result = Business::search($this->term)->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.search');
    }
}
