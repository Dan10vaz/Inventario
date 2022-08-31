<?php

namespace App\Http\Livewire\Crud;

use App\Models\Product;
use Livewire\Component;

class EditProductComponent extends Component
{
    public $name_product, $description, $category, $office, $price, $date_purchase, $state, $comment, $product, $product_id;

    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->product_id = $product->id;
        $this->name_product = $product->name_product;
        $this->description = $product->description;
        $this->category = $product->category;
        $this->office = $product->office;
        $this->price = $product->price;
        $this->date_purchase = $product->date_purchase;
        $this->state = $product->state;
        $this->comment = $product->comment;
    }

    public function updateProduct()
    {
        $this->validate([
            'comment' => 'required|max:100'
        ]);

        $product = Product::where('id', $this->product_id)->first();
        $product->update([
            'state' => $this->state,
            'comment' => $this->comment,
        ]);

        return redirect(route('admin'));
    }

    public function render()
    {
        return view('livewire.crud.edit-product-component')->layout('livewire.layouts.base');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
