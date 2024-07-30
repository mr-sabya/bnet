<?php

namespace App\Livewire\Frontend\Component;

use Livewire\Component;

class Brands extends Component
{
    public $extraClass;

    public function mount($className = '')
    {
        $this->extraClass = $className;
    }
    public function render()
    {
        return view('livewire.frontend.component.brands');
    }
}
