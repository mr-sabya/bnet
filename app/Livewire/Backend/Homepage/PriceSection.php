<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use Livewire\Component;

class PriceSection extends Component
{
    public $page = "Pricing Section", $homepage;
    public $package_section_heading, $package_section_text;

    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->package_section_heading = $homepage->package_section_heading; 
        $this->package_section_text = $homepage->package_section_text; 
    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();
        $homepage->update([
            'package_section_heading' => $this->package_section_heading,
            'package_section_text' => $this->package_section_text,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.price-section');
    }
}
