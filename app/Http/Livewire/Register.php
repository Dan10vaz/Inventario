<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{

    public $name, $last_name, $second_last_name, $email, $password;

    protected $rules = [
        'name' => 'required|max:30|min:3',
        'last_name' => 'required|max:30|min:3',
        'second_last_name' => 'required|max:30|min:3',
        'email' => 'max:50|email|unique:users',
        'password' => 'max:16|min:6',
    ];


    public function save()
    {

        $this->validate();
        User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'second_last_name' => $this->second_last_name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset([
            'name',
            'last_name',
            'second_last_name',
            'email',
            'password'
        ]);

        redirect()->route('capturer');
    }


    public function render()
    {
        return view('livewire.register');
    }
}
