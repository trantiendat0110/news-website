<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BoxHomeNavigration extends Component
{
    public $name;
    public $color;
    public $quantity;

    public function mount($name, $quantity, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->quantity = $quantity;
    }
    public function render()
    {
        $data = array('name' => $this->name, 'quantity' => $this->quantity, 'color' => $this->color);
        return view('livewire.box-home-navigration', $data);
    }
}