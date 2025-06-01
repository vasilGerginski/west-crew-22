<?php

namespace App\Livewire;

use Livewire\Component;

class Videos extends Component
{
    public function render()
    {
        return view('livewire.videos')
            ->layout('components.layouts.app');
    }
}
