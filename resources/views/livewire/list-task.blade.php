<div>
    <p>{{$task->name}}</p>

    <button wire:click="deleteTask({{ $task->id }})">Eliminar</button>
</div>
