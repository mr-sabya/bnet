<?php

namespace App\Livewire\Frontend\Component;

use App\Models\Package;
use Livewire\Component;

class Pricing extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.pricing', [
            'packages' => Package::orderBy('id', 'ASC')->get(),
        ]);
    }
}
