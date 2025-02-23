<?php

namespace App\Livewire;

use Livewire\Component;

class Skillset extends Component
{
    public function render()
    {
        return view('livewire.skillset',['skills'=>skillset::all()]);
    }
}
