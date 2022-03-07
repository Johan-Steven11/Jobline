<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
class CategoriaFactory extends Factory
{

    protected $model = Categoria::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        return [
            'imagen' =>  'Categorias/'.$this->faker->image('public/storage/Categorias',640,480,null,false)
        ];
    }
}
