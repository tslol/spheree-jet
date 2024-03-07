<?php

namespace App\Livewire\Components;

use Closure;
use Livewire\Component;


class ImageGallery extends Component
{

    public string $uuid;

    public function __construct(
        public array $images,
    ) {
        $this->uuid = uniqid();
    }

    public function render()
    {
        return view('livewire.components.image-gallery');
    }
}
