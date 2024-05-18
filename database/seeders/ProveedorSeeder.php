<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'Pan de trigo integral',
            'descripcion' => 'Pan de trigo integral, ideal para una dieta saludable.',
            'precio' => 2.50,
            'stock' => 100,
            'fecha_vencimiento' => '2024-12-31',
            'lote' => 'LT123456'
        ]);

        Producto::create([
            'nombre' => 'Pan de centeno',
            'descripcion' => 'Pan de centeno, perfecto para sandwiches.',
            'precio' => 3.00,
            'stock' => 80,
            'fecha_vencimiento' => '2024-11-30',
            'lote' => 'LT654321'
        ]);

        // Agrega más productos si es necesario
    }
}
