<div>

    @foreach($users as $user)
        <div>
            @livewire('componente-filho', ['user' => $user], key($user->id))
            {{-- <button wire:click='removeUser("{{$user->id}}")'>Remove user</button> --}}
        </div>
    @endforeach

    <hr>

    <button wire:click='$refresh'>Refresh Geral</button> : {{ now() }}
    <button wire:click='atualizaFilho'>Refresh Filho</button> : {{ now() }}
</div>
