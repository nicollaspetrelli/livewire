<div>
    <h2>Componente Pai</h2>

    @foreach($users as $user)
        @livewire('componente-filho', ['user' => $user], key($user))
    @endforeach

</div>
