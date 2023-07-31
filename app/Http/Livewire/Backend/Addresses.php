<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Addresses extends Component
{
    public $modal;

    public function render()
    {
        return view('livewire.backend.adresses.create');
    }
}
