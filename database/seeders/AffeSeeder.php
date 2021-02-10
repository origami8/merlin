<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AffeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Affe::create(['one_to_ten'=>'7'], ['yes_no'=>'1'], ['firstname'=>'lili'], ['lastname'=>'deng'] );
    }
}
