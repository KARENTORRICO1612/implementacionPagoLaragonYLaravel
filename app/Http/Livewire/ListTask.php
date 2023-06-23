<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListTask extends Component
{
    public $task;

    public function mount($task){
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.list-task');
    }
}
