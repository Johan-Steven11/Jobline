<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Feder22',
            'email' => 'ramirezfeder33@gmail.com',
            'password' => bcrypt('12345678'),
            'rol_id' =>  1
        ]);
    }
}
