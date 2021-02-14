<div>

    @foreach($users as $user)
        <div>
            @livewire('componente-filho', ['user' => $user], key($user->id))
            <button wire:click='removeUser("{{$user->id}}")'>Remove user</button>
        </div>
    @endforeach

    <button wire:click='$refresh'>Refresh Geral</button> : {{ now() }}
</div>
