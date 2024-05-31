<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public $todos = [];
    public function mount()
    {
        $todos = ModelsTodo::latest();
    }
    public function addTodo()
    {
        
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
