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
        // \App\Models\User::factory(10)->create();
        $this->call([
            AffeSeeder::class,
            UaSeeder::class,
            UbSeeder::class,
            ArtikelSeeder::class,
            BestellungSeeder::class,
            KundeSeeder::class,
            LagerSeeder::class,
            MitgliedschaftSeeder::class
        ]);
    }
}
