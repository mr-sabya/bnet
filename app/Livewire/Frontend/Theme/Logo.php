<?php

namespace App\Livewire\Frontend\Theme;

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
        return view('livewire.frontend.theme.logo');
    }
}
