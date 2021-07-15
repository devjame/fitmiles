<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Membro::factory(15)->create();
        \App\Models\Mensalidade::factory(10)->create();
        \App\Models\Treinador::factory(5)->create();
        \App\Models\Modalidade::factory(15)->create();
    }
}
