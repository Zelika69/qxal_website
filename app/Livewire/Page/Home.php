<?php

namespace App\Livewire\Page;

use App\Models\Caracteristica;
use App\Models\Estadistica;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.page.home',
            [
                'estadisticas' => Estadistica::first(),
                'caracteristicas' => Caracteristica::orderBy('title')->get(),
            ]
            );
    }
}
