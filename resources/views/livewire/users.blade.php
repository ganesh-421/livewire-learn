<div>
    <input type="search" wire:model.debounce.300ms="search"><br>
    <p wire:loading wire:target="search">searching user data..</p> 
    {{-- target is used if the msg is to be shown only when updating specific component --}}
    <p wire:loading>fetching user data..</p> 
     <div wire:poll> 
         default is 2seconds, ghari ghari refresh garcha 
         <center><h3>Time</h3></center> 
        {{ now() }} 
     </div>
    <div wire:init="loadUsers">
    </div>
    <ul wire:loading.remove wire:init="$refresh">
        @if (count($users))
            @foreach ($users as $user)
                <li>{{ $user->name }}</li><span>{{ $user->email }}</span>
                <button wire:click="check"></button>
            @endforeach 
            <div>
                {{ $users->links()}}
            </div>
        @else
            <p>No user Found</p>
        @endif
        
    </ul>
    
</div>
