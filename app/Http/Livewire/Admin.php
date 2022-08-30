<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Admin extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin')->with('products', $products);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
