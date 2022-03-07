<?php

namespace Database\Factories;

use App\Models\SubCategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->sentence(2);
        $subcategoria = SubCategoria::all()->random();
        $categoria = $subcategoria->categoria;
        $usuario = $categoria->usuariofreelancer->random();
        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'precio' => $this->faker->randomElement([19.999,49.999,99.999]),
            'descripcion' => $this->faker->text(),
            'estado' => 1,
            'user_id' => $usuario->id,
            'subcategoria_id' => $subcategoria->id
        ];
    }
}
