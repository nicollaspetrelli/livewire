<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteFilho extends Component
{
    public $user = '';

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.componente-filho');
    }
}
