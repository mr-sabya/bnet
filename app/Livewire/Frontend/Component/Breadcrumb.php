<?php

namespace App\Livewire\Frontend\Component;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $pageTitle;

    public function mount($title)
    {
        $this->pageTitle = $title;    
    }

    public function render()
    {
        return view('livewire.frontend.component.breadcrumb');
    }
}
