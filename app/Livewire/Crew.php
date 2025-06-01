<?php

namespace App\Livewire;

use Livewire\Component;

class Crew extends Component
{
    public function render()
    {
        return view('livewire.crew')
            ->layout('components.layouts.app');
    }
}
