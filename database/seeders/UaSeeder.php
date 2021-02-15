<?php

namespace Database\Seeders;

use App\Models\Ua;
use App\Http\Controllers\UaController;
use Illuminate\Database\Seeder;

class UaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ua::create(['astring'=>'noivsa', 'ainteger'=>'8', 'aboolean'=> true, 'adouble'=>'65.88'] );
        Ua::create(['astring'=>'buvap', 'ainteger'=>'0', 'aboolean'=> false, 'adouble'=>'698.1'] );
        Ua::create(['astring'=>'nüoif', 'ainteger'=>'4', 'aboolean'=> false, 'adouble'=>'453.77'] );
        Ua::create(['astring'=>'bpuve', 'ainteger'=>'2', 'aboolean'=> true, 'adouble'=>'67.3'] );
    }
}
