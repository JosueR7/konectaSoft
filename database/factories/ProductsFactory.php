<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->product,
            'referencia' => $faker->sentence,
            'precio' ,
            'peso',
            'categoria',
            'stock'
        ];
    }
}
