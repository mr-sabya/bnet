<?php

namespace App\Livewire\Frontend\Component;

use App\Models\HomePage;
use Livewire\Component;

class VideoArea extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.video-area', [
            'home' => HomePage::where('id', 1)->first(),
        ]);
    }
}
