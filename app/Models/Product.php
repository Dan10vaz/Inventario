<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'description',
        'category',
        'office',
        'price',
        'date_purchase',
        'state',
        'comment'
    ];
}
