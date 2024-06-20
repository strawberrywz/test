<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{

    public function test()
    {
        dd("testing");
    }

    public function render()
    {
        return view('livewire.test');
    }
}
