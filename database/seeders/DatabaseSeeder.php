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
        $this->call(UsuarioSeeder::class);
        $this->call(ServicioSeeder::class); 
        $this->call(PostSeeder::class);
        $this->call(IngleSeeder::class);
        $this->call(ItalianoSeeder::class);
    }
}
