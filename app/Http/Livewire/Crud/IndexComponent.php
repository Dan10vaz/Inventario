<?php

namespace App\Http\Livewire\Crud;

use App\Models\Product;
use Livewire\Component;

class IndexComponent extends Component
{
    public $name_product, $description, $category, $office, $price, $date_purchase, $products_id;

    public function delete($id)
    {
        $product = Product::where('id', $id);
        $product->delete();
    }

    public function render()
    {
        $products = Product::all();
        return view('livewire.crud.index-component')->with('products', $products)->layout('livewire.layouts.base');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
