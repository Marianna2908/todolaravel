<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoForm extends Component
{
    public $todos = '';

    public $listeners =['todoAdded'];

    public function mount(){
        $this->todos = Todo::latest()->get();

    }

    public function todoAdded(){
        $this->todos = Todo::latest()->get();
    }
    public function deleteTodo($id){
        $todo = Todo::findOrFail($id)->delete();
        return redirect()->to('todo');
    }


    public function render()
    {
        return view('livewire.todo-form',[
            'todos'=>$this->todos,
        ]);
    }
}
