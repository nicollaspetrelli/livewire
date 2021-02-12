<div>
    {{-- The name is {{ $name }}
    <br>
    The last name is {{ $lastName }}
    <br>
    The request param is {{ $requestParam }} --}}

    <h2>Lista de Usuarios</h2>

    @if($users)

        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>

    @else

        Nenhum usuário registrado ...

    @endif

</div>
