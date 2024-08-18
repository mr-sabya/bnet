<?php

namespace App\Livewire\Frontend\Component;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.frontend.component.services', [
            'services' => Service::orderBy('id', 'ASC')->get(),
        ]);
    }
}
