<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $input = "First";

    public function render()
    {
        return view('livewire.actions');
    }

    public function limparInput()
    {
        $this->input = "";
    }

    public function setValue($value)
    {
        $this->input = $value;
    }

    public function submit()
    {
        $this->input = "Enviado!";
    }
}
