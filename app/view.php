<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.view', ['items' => Item::all()]);
    }
}

