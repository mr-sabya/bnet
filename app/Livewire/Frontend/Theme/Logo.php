<?php

namespace App\Livewire\Frontend\Theme;

use App\Models\Setting;
use Livewire\Component;

class Logo extends Component
{
    public $className, $isWhiteLogo = false;

    public function mount($className, $whiteLogo = null)
    {
        $this->className = $className;
        if ($whiteLogo == true) {
            $this->isWhiteLogo = true;
        }
    }


    public function render()
    {
        return view('livewire.frontend.theme.logo',[
            'setting' => Setting::where('id', 1)->first(),
        ]);
    }
}
