<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRegister extends Model
{
    use HasFactory;
    protected $filable = [
        'name',
        'last_name',
        'second_last_name'
    ];
}
