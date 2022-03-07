<?php

namespace Database\Seeders;

use App\Models\Freelancer;
use Illuminate\Database\Seeder;

class FreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Freelancer::factory(250)->create();
    }
}
