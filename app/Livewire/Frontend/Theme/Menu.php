<?php

namespace App\Livewire\Frontend\Theme;

use App\Models\FtpServer;
use App\Models\LiveTv;
use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.frontend.theme.menu',[
            'servers' => FtpServer::orderBy('id', 'ASC')->get(),
            'livetvs' => LiveTv::orderBy('id', 'ASC')->get(),
        ]);
    }
}
