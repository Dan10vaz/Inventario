<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Auth\Middleware\Authenticate;

class Capturer extends Component
{
    public $name;

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.capturer');
    }
}
