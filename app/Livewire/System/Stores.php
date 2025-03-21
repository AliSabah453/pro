<?php

namespace App\Livewire\System;

use Livewire\Component;

class Stores extends Component
{
    public function render()
    {
        return view('livewire.system.stores')->layout('livewire.system.layout.app');
    }
}
