<?php

namespace App\Livewire;

use App\Models\Todo as TodoItem;
use Livewire\Component;

class Todo extends Component
{
    public $todos = [];
    public $todoText = '';
    public function mount()
    {
        $this->showTodos();
    }
    public function addTodo()
    {
        $todo = new TodoItem();
        $todo->item = $this->todoText;
        $todo->save();
        $this->showTodos();
    }
    public function todoCheck($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->is_done = !$todo->is_done;
        $todo->save();
        $this->showTodos();
    }
    public function todoDelete($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->delete();
        $this->showTodos();
    }
    public function render()
    {
        return view('livewire.todo');
    }
    public function showTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'DESC')->get();
    }
}
