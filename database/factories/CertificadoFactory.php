<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Freelancer;

class CertificadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $certificados1 = Freelancer::all()->random();
        return [
                    'acta' => $this->faker->text(),
                    'descripcion' => $this->faker->text(),
                    'institucion' => $this->faker->text(),
                    'año' => $this->faker->randomElement([2005,2010,2015,2020]),
                    'freelancer_id' => $certificados1->id,
                    'url' =>  'Certificados/'.$this->faker->image('public/storage/Certificados',640,480,null,false)

        ];
    }
}
