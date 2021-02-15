<?php

namespace App\Http\Controllers;

use App\Models\Ua;
use Illuminate\Http\Request;

class UaController extends Controller
{
    function getAll(){
        $data = Ua::all();
        return response($data, 200);
    }

    public function createUa(Request $request){

        $data = $request->validate([
            "astring" => "",
            "ainteger" => "numeric",
            "aboolean" => "boolean",
            "adouble" => "numeric"
        ]);

        $ua = Ua::create($data);
        return response($ua,200);
    }
}
