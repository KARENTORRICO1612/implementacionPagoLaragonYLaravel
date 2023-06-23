<div>
    <h2>{{$title}} {{$name}}</h2>


    @if(session()->has('message'))

    <p>{{session('message')}}</p>

    @endif

    @foreach ($tasks as $t)
    </div>
        <p>{{ $t->name }}</p>
    </div>
    @endforeach

    <p>{{$name}}</p>

    <button wire:click="deleteTask({{ $t->id}})">Eliminar</button>

    {{-- <input wire:model.debounce.10ms="name" type="text"> --}}
    <input wire:model="name" type="text">
    {{-- <button wire:click="addTask">Agregar</button> --}}
    <button wire:click="addTask2({{ $name }})">Agregar</button>
    {{-- <input wire:keydown.enter="addTask" wire:model="name" type="text"> --}}
    {{-- <button wire:click="$set('name','Fernando')">Agregar</button> --}}
</div>
