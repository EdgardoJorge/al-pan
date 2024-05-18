<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->sentence,
        'precio' => $faker->randomFloat(2, 1, 100), // Número decimal aleatorio entre 1 y 100 con 2 dígitos decimales
        'stock' => $faker->numberBetween(0, 100), // Número aleatorio entre 0 y 100
        'fecha_vencimiento' => $faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'), // Fecha aleatoria en el próximo año
        'lote' => $faker->regexify('[A-Z0-9]{8}'), // Cadena aleatoria de 8 caracteres alfanuméricos
    ];
});
