<?php

namespace App\Livewire\Frontend\Component;

use App\Models\AboutPage;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.counter', [
            'about' => AboutPage::where('id', 1)->first(),
        ]);
    }
}
