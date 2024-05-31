<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public $action = '+';
    public $result = 0;

    public function calculate()
    {
        switch ($this->action) {
            case '+':
                $this->result = $this->number1 + $this->number2;
                break;
            case '-':
                $this->result = $this->number1 - $this->number2;
                break;
            case '/':
                $this->result = $this->number1 / $this->number2;
                break;
            case '*':
                $this->result = $this->number1 * $this->number2;
                break;
        }
    }
    public function render()
    {
        return view('livewire.calculator');
    }
}
