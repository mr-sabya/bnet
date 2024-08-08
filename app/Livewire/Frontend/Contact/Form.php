<?php

namespace App\Livewire\Frontend\Contact;

use App\Models\Setting;
use Livewire\Component;

class Form extends Component
{
    public function render()
    {
        return view('livewire.frontend.contact.form', [
            'setting' => Setting::where('id', 1)->first(),
        ]);
    }
}
