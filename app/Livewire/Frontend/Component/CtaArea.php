<?php

namespace App\Livewire\Frontend\Component;

use App\Models\HomePage;
use App\Models\Setting;
use Livewire\Component;

class CtaArea extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.cta-area', [
            'home' => HomePage::where('id', 1)->first(),
            'setting' => Setting::where('id', 1)->first(),
        ]);
    }
}
