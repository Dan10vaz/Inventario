<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password, $access;

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
            'access' => 1,
        ])) {
            return redirect(route('capturer'));
        } else {
            return back()->with('message', 'Credenciales Incorrectas o tu acceso ha sido restringido');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('livewire.layouts.base');
    }
}
