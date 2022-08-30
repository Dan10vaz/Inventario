<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Auth\Middleware\Authenticate;

class Capturer extends Component
{
    public $name;
    public $name_product, $description, $category, $office, $price, $date_purchase;

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    protected $rules = [
        'name_product' => 'required|max:30',
        'description' => 'required|max:100',
        'category' => 'required',
        'office' => 'required',
        'price' => 'required|numeric|max:5',
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
    public function category()
    {
        $category = Category::all();
    }

    public function render()
    {
        $categoryData = Category::all();
        return view('livewire.capturer')->with('categoryData', $categoryData);
    }
}
