<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponentePai extends Component
{
    public $users = ['Nicollas', 'Juliana', 'Tangerina'];

    public function render()
    {
        return view('livewire.componente-pai');
    }
}
