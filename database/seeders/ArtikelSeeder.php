<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Http\Controllers\ArtikelController;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::create(['Name'=>'Fernseher', 'Hersteller'=> 'Samsung', 'Kategorie'=>'5', 'Preis'=>'27.3'] );
    }
}
