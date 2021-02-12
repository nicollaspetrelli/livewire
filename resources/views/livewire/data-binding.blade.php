<div>
    <input wire:model.lazy="name" type="text" name="name">
    Meu nome é {{ $name }}

    <br>

    Mostrar idade
    <input wire:model="show" type="checkbox">

    @if($show)
        Minha idade é {{ $age }}
    @endif

    <hr>

    Dado selecionado: {{ $select }}
    <select wire:model="select" name="" id="">
        <option>PHP</option>
        <option>LIVEWIRE</option>
        <option>LARAVEL</option>
    </select>

</div>
