<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            return redirect(route('capturer'));
        } else {
            return back()->with('message', 'Credenciales Incorrectas');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
