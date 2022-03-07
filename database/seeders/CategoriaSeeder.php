<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categorias = [
            [
                'nombre' => 'Programacion',
                'slug' => Str::slug('Programacion'),
                'icono'=>'<i class="fa-solid fa-computer-classic"></i>',
            ],
            [
                'nombre' => 'Diseño Grafico',
                'slug' => Str::slug('Diseño Grafico'),
                'icono' => '<i class="fa-solid fa-gallery-thumbnails"></i>',
            ],
            [
                'nombre' => 'Marketing Digital',
                'slug' => Str::slug('Marketing Digital'),
                'icono'=> '<i class="fa-solid fa-magnifying-glass-dollar"></i>',
            ],
            [
                'nombre' => 'Animacion 3D',
                'slug' => Str::slug('Animacion 3D'),
                'icono' => '<i class="fa-brands fa-500px"></i>',
            ],
            [
                'nombre' => 'Edicion de contenido',
                'slug' => Str::slug('Edicion de contenido'),
                'icono' => '<i class="fa-brands fa-unsplash"></i>',
            ]
            ];

            foreach ($categorias as $categoria) {
             $idcategoria =  Categoria::factory(1)->create($categoria)->first();

              $usuarios = User::factory(3)->create();

              foreach ($usuarios as $usuario) {
                  $usuario->categorias()->attach($idcategoria->id);
              }
            }
    }
}
