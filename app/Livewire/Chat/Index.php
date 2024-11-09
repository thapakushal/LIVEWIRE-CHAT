<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // return view('livewire.chat.index'); // Ensure this view exists
        return view('livewire.chat.index')->extends('layouts.app'); // Extending app layout
    }
}
