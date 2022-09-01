<?php

namespace App\Http\Livewire\Crud;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;
    public $name_product, $description, $category, $office, $price, $date_purchase, $products_id;



    public function delete($id)
    {
        $product = Product::where('id', $id);
        $product->delete();
        return back()->with('message', 'El producto se elimino correctamente');
    }


    public function render()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(5);
        return view('livewire.crud.index-component')->with('products', $products)->layout('livewire.layouts.base');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
