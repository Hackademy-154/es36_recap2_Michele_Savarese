<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $inputNumber;
    public $DinputNumber;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementbyInput()
    {
        $this->count+=$this->inputNumber;
    }

    public function decrementbyInput()
    {
        $this->count-=$this->DinputNumber;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
