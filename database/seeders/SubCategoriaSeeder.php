<?php

namespace Database\Seeders;

use App\Models\SubCategoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // subcategoria de programacion
        $subcategorias = [
            [
                'categoria_id' => 1,
                'nombre' => 'WordPress',
                'slug' => Str::slug('WordPress'),
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Desarrollo de web sites',
                'slug' => Str::slug('Desarrollo de web sites'),
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Desarrollo de e-commerce',
                'slug' => Str::slug('Desarrollo de E-Commerce'),
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Apps Moviles',
                'slug' => Str::slug('Apps Moviles'),
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Aplicaciones de escritorio',
                'slug' => Str::slug('Aplicaciones de escritorio'),
            ],
            [
                'categoria_id' => 1,
                'nombre' => 'Programacion web',
                'slug' => Str::slug('Programacion web'),
            ], [
                'categoria_id' => 1,
                'nombre' => 'Desarrollo de juegos',
                'slug' => Str::slug('Desarrollo de juegos'),
            ],
            // subcategoria de diseño grafico
            [
                'categoria_id' => 2,
                'nombre' => 'Diseño de logos',
                'slug' => Str::slug('Diseño de logos'),
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Tarjetas de presentacion',
                'slug' => Str::slug('Tarjetas de presentacion'),
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Diseño de folletos',
                'slug' => Str::slug('Diseño de folletos'),
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Diseño de posters',
                'slug' => Str::slug('Diseño de posters'),
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Diseño de libros',
                'slug' => Str::slug('Diseño de libros'),
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Diseño de volantes',
                'slug' => Str::slug('Diseño de volantes'),
            ], [
                'categoria_id' => 2,
                'nombre' => 'Diseño industrial',
                'slug' => Str::slug('Diseño industrial'),
            ],

            // subcategoria de marketing

            [
                'categoria_id' => 3,
                'nombre' => 'Marketing de e-commerce',
                'slug' => Str::slug('Marketing de e-commerce'),
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Marketing en redes sociales',
                'slug' => Str::slug('Marketing en redes sociales'),
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Marketing de libros',
                'slug' => Str::slug('Marketing de libros'),
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Marketing de aplicaciones',
                'slug' => Str::slug('Marketing de aplicaciones'),
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Estrategias de mercado',
                'slug' => Str::slug('Estrategias de mercado'),
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Web Analytics',
                'slug' => Str::slug('Web Analytics'),
            ], [
                'categoria_id' => 3,
                'nombre' => 'Marketing de afiliados',
                'slug' => Str::slug('Marketing de afiliados'),
            ],
            // subcategorias de animacion 3d
            [
                'categoria_id' => 4,
                'nombre' => 'Dibujos animados y comics',
                'slug' => Str::slug('Dibujos animados y comics'),
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Animacion de guiones graficos',
                'slug' => Str::slug('Animacion de guiones graficos'),
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Marketing de libros',
                'slug' => Str::slug('Marketing de libros'),
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Retratos y caricaturas',
                'slug' => Str::slug('Retratos y caricaturas'),
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Modelo de exteriores',
                'slug' => Str::slug('Modelo de exteriores'),
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Modelo de interiores',
                'slug' => Str::slug('Modelo de interiores'),
            ], [
                'categoria_id' => 4,
                'nombre' => 'Artes de juegos',
                'slug' => Str::slug('Artes de juegos'),
            ],

            // subcategoria edicion de contenido

            [
                'categoria_id' => 5,
                'nombre' => 'Edicion de fotos',
                'slug' => Str::slug('Edicion de fotos'),
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Edicion de videos',
                'slug' => Str::slug('Edicion de videos'),
            ],
            [
                'categoria_id' => 5,
                'nombre' => 'Edicion de video juegos',
                'slug' => Str::slug('Edicion de video juegos'),
            ]
        ];
        foreach ($subcategorias as $subcategoria) {
            SubCategoria::factory(1)->create($subcategoria);
         }
    }
}
