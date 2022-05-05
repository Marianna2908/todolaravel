<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddTodos extends Component
{
    public $item;


    public function mount(){
        $this->item= '';
    }

    public function addTodo(){
            Todo::create([
                'item'=>$this->item,
                'completed'=> 0,
                'user_id' => Auth::user()->id,
            ]);
            $this->reset('item');
            $this->emit('todoAdded');

    }
    public function register(){
        return redirect()->to('register');
    }

    public function render()
    {
        return view('livewire.add-todos');
    }
}
