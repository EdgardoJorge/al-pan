<?php

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'nombre' => 'Proveedor A',
            'direccion' => 'Calle 123',
            'telefono' => '123456789'
        ]);

        Proveedor::create([
            'nombre' => 'Proveedor B',
            'direccion' => 'Avenida XYZ',
            'telefono' => '987654321'
        ]);

        // Agrega más proveedores si es necesario
    }
}
