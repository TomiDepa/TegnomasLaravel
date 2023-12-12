<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         
         Rol::create([
            'nombre' => 'Admin',
            'id_permiso' => 1,
        ]);

       
        Rol::create([
            'nombre' => 'Editor',
            'id_permiso' => 2,
        ]);

       
        Rol::create([
            'nombre' => 'Lector',
            'id_permiso' => 3,
        ]);
    }
}
