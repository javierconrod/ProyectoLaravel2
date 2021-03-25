<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::create([
            'codigo' => '12345',
            'descripcion' => 'Descripcion del alala',
            'cantidad' => '12',
            'precio' => '150',
        ]);

        Productos::create([
            'codigo' => '12346',
            'descripcion' => 'Descripcion del elelele',
            'cantidad' => '1',
            'precio' => '200',
        ]);

        Productos::create([
            'codigo' => '12347',
            'descripcion' => 'Descripcion del ilili',
            'cantidad' => '122',
            'precio' => '10',
        ]);
    }
}
