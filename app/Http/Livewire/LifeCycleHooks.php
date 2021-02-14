<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;

class LifeCycleHooks extends Component
{
    public $name = '';
    public $lastName = '';
    public $hydrate = '';
    public $updated = '';
    public $updating = '';
    public $newUpdatedName = '';

    // public $users = [];

    // Sempre é executado tipo um construtor
    public function mount(Request $request)
    {
        $this->name = "Nicollas";
        $this->lastName = "Feitosa";
        // $this->requestParam = $request->input('name');
        // $this->users = User::all();
    }

    // É executado quando um elemento do componente é atualizado
    public function hydrate()
    {
        $this->hydrate = now();
    }

    // É executado toda vez que um model é executado
    public function updated()
    {
        $this->updated = now();
    }

    // Faz a mesma coisa que o updated porém é executado antes
    public function updating()
    {
        $this->updating = now();
        sleep(1);
    }

    // Método Mágico - Toda vez que o updated $name for executado esse método será executado
    public function updatedName()
    {
        $this->newUpdatedName = 'O nome foi atualizado';
    }

    public function randomName()
    {
        $names = ['Nicollau', 'Nicollas', 'Feitosa'];
        $this->name = $names[rand(0,2)];
    }

    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
