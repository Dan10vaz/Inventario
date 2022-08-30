<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dump('Registrando roles y permisos');
        $admin = Role::create([
            'name' => 'admin',
        ]);

        $capturer = Role::create([
            'name' => 'capturer',
        ]);

        Permission::create([
            'name' => 'admin',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'capturer',
        ])->syncRoles([$admin, $capturer]);
    }
}
