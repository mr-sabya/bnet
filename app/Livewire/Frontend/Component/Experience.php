<?php

namespace App\Livewire\Frontend\Component;

use App\Models\AboutPage;
use Livewire\Component;

class Experience extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.experience', [
            'about' => AboutPage::where('id', 1)->first(),
        ]);
    }
}
