<?php

namespace App\Http\Livewire\Crud;

use App\Models\Category;
use App\Models\Office;
use App\Models\Product;
use Livewire\Component;

class AddProductComponent extends Component
{
    public $name;
    public $name_product, $description, $category, $office, $price, $date_purchase;
    public $state = 'Abierto';

    protected $rules = [
        'name_product' => 'required|max:30',
        'description' => 'required|max:100',
        'category' => 'required',
        'office' => 'required',
        'price' => 'required|numeric|digits_between:1,5',
        'date_purchase' => 'required',
    ];

    public function register()
    {
        $this->validate();
        Product::create([
            'name_product' => $this->name_product,
            'description' => $this->description,
            'category' => $this->category,
            'office' => $this->office,
            'price' => $this->price,
            'date_purchase' => $this->date_purchase,
            'state' => $this->state,
        ]);

        $this->reset([
            'name_product',
            'description',
            'category',
            'office',
            'price',
            'date_purchase',
        ]);
    }

    public function render()
    {
        $categoryData = Category::all();
        $officeData = Office::all();
        return view('livewire.crud.add-product-component')->with('categoryData', $categoryData)->with('officeData', $officeData)->layout('livewire.layouts.base');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
