<div>
    {{ $user->name }} : {{ now() }}
    <button wire:click='$refresh'>Refresh</button>
</div>
