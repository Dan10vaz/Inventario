<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UsersRegister;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dump('Registrando usuarios con roles');
        $fanny = User::create([
            'name' => 'Estefanny',
            'last_name' => 'Garcia',
            'second_last_name' => 'Ruiz',
            'email' => 'fanny@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
        $fanny->assignRole('admin');
        UsersRegister::create([
            'name' => 'Estefanny',
            'last_name' => 'Garcia',
            'second_last_name' => 'Ruiz',
        ]);
        $danny = User::create([
            'name' => 'Daniel Cristopher',
            'last_name' => 'Vazquez',
            'second_last_name' => 'Ayala',
            'email' => 'dcva9565@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
        $danny->assignRole('capturer');
        UsersRegister::create([
            'name' => 'Daniel Cristopher',
            'last_name' => 'Vazquez',
            'second_last_name' => 'Ayala',
        ]);
    }
}
