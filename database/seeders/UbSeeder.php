<?php

namespace Database\Seeders;

use App\Models\Ub;
use App\Http\Controllers\UbController;
use Illuminate\Database\Seeder;

class UbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ub::create(['uas_id'=>'3', 'bstring'=>'idf', 'binteger'=>'5', 'bboolean'=> false, 'bdouble'=>'76.2'] );
        Ub::create(['uas_id'=>'5', 'bstring'=>'iso', 'binteger'=>'12', 'bboolean'=> true, 'bdouble'=>'18.99'] );
        Ub::create(['uas_id'=>'2', 'bstring'=>'ufps', 'binteger'=>'7', 'bboolean'=> true, 'bdouble'=>'98.7'] );
    }
}
