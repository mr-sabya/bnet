<?php

namespace App\Livewire\Frontend\Component;

// use App\Models\HomePage;

use App\Models\HomePage;
use App\Models\Package;
use Livewire\Component;

class Pricing extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.pricing', [
            'home' => HomePage::where('id', 1)->first(),
            'packages' => Package::orderBy('id', 'ASC')->get(),
        ]);
    }
}
