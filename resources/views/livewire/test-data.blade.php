<div>
    Hyy {{$contact->name}} {{ now() }}
    <button wire:click="emitFoo">Refresh self and parent</button>
</div>
