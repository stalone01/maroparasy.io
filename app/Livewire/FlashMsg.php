<?php

namespace App\Livewire;

use Livewire\Component;

class FlashMsg extends Component
{
    public $message;
    public $type;

    protected $listener = ['flash'=>'setFlashMsg'];

    public function setFlashMsg($message, $type){
        $this->message = $message;
        $this->type = $type;

        $this->dispatchBrowserEvent('flash-msg', ['message' => $this->message]);
    }

    public function render()
    {
        return view('livewire.flash-msg');
    }
}
