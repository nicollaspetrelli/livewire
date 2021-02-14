<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteFilho extends Component
{
    public $user = '';

    protected $listeners = ['atualizaFilho' => 'atualiza'];

    public function mount($user)
    {
        $this->user = $user;
    }

    public function atualiza()
    {
        // Vai ser acionado e atualizado automaticamente
    }

    public function render()
    {
        return view('livewire.componente-filho');
    }
}
