<div>
     @foreach ($contacts as $contact)
         @livewire('test-data', ['contact' => $contact], key($contact->name))
         <button wire:click="removeContact('{{ $contact->name }}')">Remove</button>
     @endforeach
     {{-- key is used to avoid duplicate key error --}}
     {{ now() }}
     {{-- <button wire:click="$refresh">Refresh</button> --}}
     <button wire:click="refreshChildren">Refresh Children and parent</button>
     <button wire:click="$emit('refreshChildren')">Refresh Children</button>
</div>
