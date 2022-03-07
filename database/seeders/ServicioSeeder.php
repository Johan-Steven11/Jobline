<?php

namespace Database\Seeders;

use App\Models\Imagen;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::factory(250)->create()->each(function(Servicio $servicio){
            Imagen::factory()->create([
                'imageable_id' => $servicio->id,
                'imageable_type' =>Servicio::class

            ]);
        });
    }
}
