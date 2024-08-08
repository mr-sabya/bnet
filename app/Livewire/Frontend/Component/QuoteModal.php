<?php

namespace App\Livewire\Frontend\Component;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class QuoteModal extends Component
{

    public function closeModal()
    {
        Session::put('showmodal', 'dontshow');
    }

    public function render()
    {
        return view('livewire.frontend.component.quote-modal');
    }
}
