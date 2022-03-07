<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('Categorias');
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubCategoriaSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(FreelancerSeeder::class);
        $this->call(CertificadoSeeder::class);
    }
}
