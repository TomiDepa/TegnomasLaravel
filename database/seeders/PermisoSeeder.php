<?php

namespace Database\Seeders;

use App\Models\Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        Permiso::create([
            'nombre' => 'Administrar Todo',
        ]);

       
        Permiso::create([
            'nombre' => 'Administrar Posteos',
        ]);

        
        Permiso::create([
            'nombre' => 'Lectura',
        ]);
    }
}
