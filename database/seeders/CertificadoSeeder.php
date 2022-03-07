<?php

namespace Database\Seeders;

use App\Models\Certificado;
use App\Models\Freelancer;
use Illuminate\Database\Seeder;

class CertificadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
          Certificado::factory(250)->create();
    }
}
