<?php

namespace App\Livewire\Backend\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Service", $deleteId, $shortby = "id", $short = "DESC", $search = "";
    // page field



    public function clearShort()
    {
        $this->shortby = "id";
        $this->short = "DESC";
    }

    public function render()
    {
        return view('livewire.backend.service.index', [
            'services' => Service::search('name', $this->search)->orderBy($this->shortby, $this->short)->paginate(12),
        ]);
    }
}
