<?php

namespace App\Http\Controllers;

use App\Models\Ub;
use Illuminate\Http\Request;

class UbController extends Controller
{
    function getAll(){
        $data = Ub::all();
        return response($data, 200);
    }

    public function createUb(Request $request){

        $data = $request->validate([
            "uas_id" => "",
            "bstring" => "",
            "binteger" => "numeric",
            "bboolean" => "boolean",
            "bdouble" => "numeric"
        ]);
        $ub = Ub::create($data);
        return response($ub,200);
    }
}
