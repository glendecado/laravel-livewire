<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Time extends Component
{
    public $phTime;
    public function render()
    {
        $this->phTime = Carbon::now('Asia/Manila')->format('H:i:s');;
        return view('livewire.view');
    }
}
