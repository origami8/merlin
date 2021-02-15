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

    public function addToUa(Request $request){
        $ua = new Ua;
        $ua->updateTimestamps();
        $ua->astring=$request->astring;
        $ua->ainteger=$request->ainteger;
        $ua->aboolean=$request->aboolean;
        $ua->adouble=$request->adouble;
        $ua->save();
    }

    public function getById($id){
        $ua = Ua::find($id);
        return response($ua, 200);
    }

    public function update(){

    }

    public function delete(){

    }

}
