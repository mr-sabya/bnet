<?php

namespace App\Livewire\Frontend\About;

use App\Models\AboutPage;
use Livewire\Component;

class Text extends Component
{
    public function render()
    {
        return view('livewire.frontend.about.text',[
            'about' => AboutPage::where('id', 1)->first(),
        ]);
    }
}
