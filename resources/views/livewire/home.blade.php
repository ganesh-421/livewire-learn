<div>
    <style>
        .opacity-25 {
            opacity: 0.25;
        }
    </style>
    <div>
        @if (session()->has('message'))
            <h2>{{ session('message') }}</h2>
        @endif
    </div>
    {{-- tailwind --}}
    {{-- <div x-show="{open: false}">
        <div x-show="open">
            I am shown
        </div>
        <button @click="open=true">Show it</button> 
    
        </div>
    --}}
    {{-- <input type="text" wire:model.lazy="num1"> --}}
    <x-inputs wire:model.lazy="num1" wire:loading.class="opacity-25"/>
    <x-inputs wire:model.lazy="num2"/>
    {{-- <input type="text" wire:model.lazy="num2"> --}}
    <input type="button" wire:click="$emit('add')" value="add">
    <div>
        The result is: {{ $sum }}
    </div>
    {{-- <strong>{{$name}}</strong> --}}
    {{-- <strong>{{$message}}</strong> --}}
    {{-- @livewire('services.web') --}}
    {{-- @livewire('services.home') --}}
    {{-- custom script --}}
    <script>
        // document.addEventListener('livewire:load', function() {
        //     @this.num1 = 2    //no request is sent
        //     @this.num2 = 22  //no request is sent
        //     @this.addTwo() //this will send request
        //     @this.on('sumChanged', function() {
        //         console.log(@this.sum)
        //     })
        //     @this.on('num1Changed', function() {
        //         console.log(@this.num1)
        //     })
        // })
        // document.addEventListener('livewire:load', function() {
        //     document.title = @this.title // way to access this property globally.. not recommended.. 
        // })
    </script>
    {{-- <x-inputs name="name" id="id" /> --}}
</div>
