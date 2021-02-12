<div>
    Meu valor é
    <input wire:model="input" type="text">

    <button wire:click="limparInput">Clear Input</button>

    <br><br>
    <button wire:click="setValue('Nicollas')">Set Value</button>

    <br><br>
    <button wire:mouseenter="setValue('Mouser Hover')">Hover</button>

    <br><br>
    <form action="#" wire:submit.prevent="submit">
        <button>Enviar</button>
    </form>

    <br>
    <button wire:click="$set('input', 'Alterado!')">Trocar diretamente</button>

</div>
