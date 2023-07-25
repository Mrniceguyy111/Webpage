<?php

namespace App\Http\Livewire\Backend;

use App\Models\AnimalsCategory;
use Livewire\Component;

class SystemConfig extends Component
{
    public function render()
    {
        return view('livewire.backend.config.view', [
            'animalsCategory' => AnimalsCategory::all(),
        ]);
    }
}
