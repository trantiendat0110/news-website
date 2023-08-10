<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $action;
    public $title;
    public $id_form;
    public $inputs;
    public function mount($action, $inputs = array(), $id_form, $title)
    {
        $this->action = $action;
        $this->title = $title;
        $this->id_form = $id_form;
        $this->inputs = $inputs;
    }
    public function render()
    {
        $data = array('action' => $this->action, 'inputs' => $this->inputs, 'id_form' => $this->id_form, 'title' => $this->title);
        return view('livewire.form', $data);
    }
}