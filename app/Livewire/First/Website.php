<?php

namespace App\Livewire\First;

use Livewire\Component;

class Website extends Component
{
    public function render()
    {
        return view('livewire.first.website')->layout('components.layouts.auth');
    }
}
