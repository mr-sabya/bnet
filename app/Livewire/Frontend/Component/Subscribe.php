<?php

namespace App\Livewire\Frontend\Component;

use App\Models\HomePage;
use App\Models\Package;
use Livewire\Component;

class Subscribe extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.subscribe', [
            'home' => HomePage::where('id', 1)->first(),
            'package' => Package::latest()->first(),
        ]);
    }
}
