<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affe;

class AffeController extends Controller
{
    function getAll(){
        $data = Affe::all();
        return response($data, 200);
    }

    public function createAffe(Request $request){

        $data = $request->validate([
            "id"=> "",
            "one_to_ten" => "numeric",
            "yes_no" => "boolean",
            "firstname" => "",
            "lastname" => ""
        ]);
        $affe = Affe::create($data);
        return response($affe,200);
    }
}
