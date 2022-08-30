<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dump('Registrando sucursales');
        $cuernavaca = Office::create([
            'name' => 'Cuernavaca',
        ]);

        $yautepec = Office::create([
            'name' => 'Yautepec',
        ]);

        $cuautla = Office::create([
            'name' => 'Cuautla',
        ]);

        $acapulco = Office::create([
            'name' => 'Acapulco',
        ]);
    }
}
