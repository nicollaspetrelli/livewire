<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;

class LifeCycleHooks extends Component
{
    // public $name = '';
    // public $lastName = '';
    // public $requestParam = '';

    public $users = [];

    public function mount(Request $request)
    {
        // $this->name = "Nicollas";
        // $this->lastName = "Feitosa";
        // $this->requestParam = $request->input('name');
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
