<?php

namespace App\Livewire;

use Closure;
use Livewire\Component;


class ImageGallery extends Component
{

    public string $uuid;
    public array $images;

    public function mount($images)
    {
        $this->uuid = uniqid();
        $this->images = $images;
    }

    public function render()
    {
        return view('livewire.components.image-gallery');
    }
}
