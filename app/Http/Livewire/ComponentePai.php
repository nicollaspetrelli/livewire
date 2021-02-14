<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ComponentePai extends Component
{
    public $users = ['Nicollas', 'Juliana', 'Tangerina'];

    public function mount()
    {
        $this->users = User::all();
    }

    public function removeUser($user_id)
    {
        User::whereId($user_id)->first()->delete();
        //$this->users = User:all();
        $this->users = $this->users->filter(function($user) use ($user_id){
            return $user->id != $user_id;
        });
    }

    public function render()
    {
        return view('livewire.componente-pai');
    }
}
