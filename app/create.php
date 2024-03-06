<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;
    public function render()
    {
        return view('livewire.click');
    }

    public function add()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create a new item using the validated data
        Item::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
    }
}
