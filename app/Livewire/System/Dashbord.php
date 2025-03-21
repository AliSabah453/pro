<?php

namespace App\Livewire\System;

use Livewire\Component;

class Dashbord extends Component
{
    public function render()
    {
        return view('livewire.system.dashbord')->layout('livewire.system.layout.app');
    }
}
