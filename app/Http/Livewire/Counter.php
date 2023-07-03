<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;

class Counter extends Component
{

    // public $name = "CodigoFacilito";
    public $name;
    public $title;


    protected $listeners = ['deleteTask'];

    public function mount($title){ 
        $this->title = $title;
    }

    public function addTask(){
        Task::create(['name' => $this->name]);
        $this->name = "";
    }

    public function addTask2($name)
    {
        dd($name);
    }
    
    public function deleteTask($id)
    {
        session()->flash('message','Tarea se ha eliminado');
        Task::destroy($id);

         return redirect()->route('about');
    }

    public function updating($name, $value){
        // dd($value);
    }

    public function render()
    {
        return view('livewire.counter',[
            'tasks' => Task::all()
        ]);
    }
}
