<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use Livewire\Component;

class ServiceSection extends Component
{
    public $page = "Service Section", $homepage;
    public $service_section_heading;

    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->service_section_heading = $homepage->service_section_heading; 
    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();
        $homepage->update([
            'service_section_heading' => $this->service_section_heading,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.service-section');
    }
}
