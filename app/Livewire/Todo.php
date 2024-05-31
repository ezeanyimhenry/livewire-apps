<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public $todos = [];
    public function mount()
    {
        $this->showTodos();
    }
    public function addTodo()
    {

    }
    public function todoCheck()
    {

    }
    public function todoDelete()
    {
        
    }
    public function render()
    {
        return view('livewire.todo');
    }
    public function showTodos()
    {
        $this->todos = ModelsTodo::orderBy('created_at', 'DESC')->get();
    }
}
