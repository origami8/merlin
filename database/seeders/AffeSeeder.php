<?php

namespace Database\Seeders;

use App\Models\Affe;
use App\Http\Controllers\AffeController;
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
        Affe::create(['one_to_ten'=>'7', 'yes_no'=> true, 'firstname'=>'donna', 'lastname'=>'day'] );
    }
}
