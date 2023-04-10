<div>
    {{-- <form action="" wire:submit.prevent="makeFullname"> .prevent is event modifier --}}
        <input type="text" placeholder="firstname"
        class="border-green" 
        wire:model.lazy="student.fname" 
        wire:dirty.class="border-red"
        wire:dirty.class.remove="border-green"
        >
        @error('student.fname')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" placeholder="lastname" 
        class="border-green"
        wire:model.lazy="student.lname" 
        wire:dirty.class="border-red"
        wire:dirty.class.remove="border-green"
        >
        @error('student.fname')
            <p>{{ $message }}</p>
        @enderror
        @if ($image)
            <div>
                <img src="{{ $image->temporaryURL() }}" alt="" width="300">
            </div> 
        @endif
        {{-- <input type="file" wire:model.lazy="image">
        @error('image')
            <p>{{ $message }}</p>            
        @enderror --}}
        {{-- for multiple file uploads --}}
        @if ($images)
            @foreach ($images as $photo)
                <div>
                    <img src="{{ $photo->temporaryURL()}}" alt="" width="500">
                </div>            
            @endforeach
        @endif
       
        <input type="file" wire:model="images" multiple>
        @error('images.*')
            <p>{{ $message }}</p>
        @enderror
        {{-- you can also use debounce.1000ms --}}
        <button wire:click="downloadImage">Download</button>
        <p>{{ $fullname }}</p>
        <div wire:loading wire:target="makeFullname">Loading...</div> {{-- if you add wire:loading.remove, yo chai 
            loading hudaa dekhinna, vaisakesi dekhincha--}}
            {{-- check if offline --}}
            <div wire:offline>
                Offline
            </div>
        <input type="submit" wire:click.prefetch="makeFullname" value="See Fullname" {{--wire:click="$emit('concatenated')"--}}/>
        {{-- the next way to fire event is in NewComponent.php --}}
    {{-- </form> --}}
    {{-- <p>{{$message}}</p> --}}
    {{-- next way in app.blade.php --}}
</div>
