<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\skillset;

class SkillsetList extends Component
{
    public function render()
    {
        return view('livewire.skillset',['skills'=>skillset::all()]);
    }
}
