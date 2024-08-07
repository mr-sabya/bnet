<?php

namespace App\Livewire\Frontend\Theme;

use App\Models\Setting;
use Livewire\Component;

class HeaderTop extends Component
{
    public function render()
    {
        return view('livewire.frontend.theme.header-top',[
            'setting' => Setting::where('id', 1)->first(),
        ]);
    }
}
