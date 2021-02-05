<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testdata;

class TestdataController extends Controller
{
    public function createTestdata(Request $request){

        $data = $request->validate([
            "someAttribute" => "",
            "someInteger" => "numeric"
        ]);
        $testdata = Testdata::create($data);
        return response($testdata,200);
    }
}
