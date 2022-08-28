<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $electronics = Category::create([
            'name' => 'Electronica',
        ]);
        $whiteLine = Category::create([
            'name' => 'Linea blanca',
        ]);
        $sports = Category::create([
            'name' => 'Deportes',
        ]);
        $foods = Category::create([
            'name' => 'Alimentos',
        ]);
        $garden = Category::create([
            'name' => 'Jardin',
        ]);
    }
}
