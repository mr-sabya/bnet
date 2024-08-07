<?php

namespace App\Livewire\Frontend\Component;

use App\Models\HomePage;
use App\Models\Package;
use Livewire\Component;

class SpecialOffer extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.special-offer', [
            'home' => HomePage::where('id', 1)->first(),
            'package' => Package::first(),
        ]);
    }
}
