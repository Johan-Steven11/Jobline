<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imagen' =>  'SubCategorias/'.$this->faker->image('public/storage/SubCategorias',640,480,null,false)
        ];
    }
}
