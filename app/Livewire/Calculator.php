<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public $action = '+';
    public $result = 0;
    public bool $buttonIsDisabled = false;

    public function calculate()
    {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;
        switch ($this->action) {
            case '+':
                $this->result = $num1 + $num2;
                break;
            case '-':
                $this->result = $num1 - $num2;
                break;
            case '/':
                $this->result = $num1 / $num2;
                break;
            case '*':
                $this->result = $num1 * $num2;
                break;
        }
    }
    public function render()
    {
        return view('livewire.calculator.app');
    }

    public function updated($property)
    {
        if ($this->number1 == '' || $this->number2 == '')
        {
            $this->buttonIsDisabled = true;
        }else{
            $this->buttonIsDisabled = false;
        }
    }
}
