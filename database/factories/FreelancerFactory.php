<?php

namespace Database\Factories;

use App\Models\Freelancer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FreelancerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->sentence(2);
        $usuario = User::all()->random();
       // $usuarioid = $usuario->freelancer()->random();
        return [
            'nombre' => $nombre,
            'apellido' => $nombre,
            'descripcion' => $this->faker->text(),
            'idioma' => $this->faker->randomElement(['Ingles','Español','Frances']),
            'ocupacion' => $this->faker->randomElement(['Desarrollador','Diseño','Editor']),
            'experiencia' => $this->faker->randomElement([2,5,6,10]),
            'Habilidad' => $this->faker->text(),
            'educacion' => $this->faker->randomElement(['Bachiller','univeristario','lincenciado']),
            'certificado' =>  'Certificados'.$this->faker->image('public/storage/Certificados',640,480,null,false),
            'correo' => $this->faker->unique()->safeEmail(),
            'contacto' => '4488123',
            'user_id' => $usuario->id,


        ];
    }
}
