<div>
    <p>{{ $task->name }}</p>

    {{-- <button wire:click="deleteTask({{ $task->id }})">Eliminar</button> --}}
    {{-- <button wire:click="$emit('deleteTask',{{ $task->id }})">Eliminar</button> --}}
    <button wire:click="$emitUp('deleteTask',{{ $task->id }})">Eliminar</button>
</div>
