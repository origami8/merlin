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

    public function addToUb(Request $request){
        $ub = new Ub;
        $ub->updateTimestamps();
        $ub->uas_id=$request->uas_id;
        $ub->bstring=$request->bstring;
        $ub->binteger=$request->binteger;
        $ub->bboolean=$request->bboolean;
        $ub->bdouble=$request->bdouble;
        $ub->save();
    }

    public function getById($id){
        $ub = Ub::find($id);
        return response($ub, 200);

    }

    public function withRelations(){
        $ub = Ub::with('Ua')
            ->where('id', '>', '0')
            ->orderBy('bstring', 'ASC')
            // ->take(5)
            ->get();
        return response($ub, 200);
    }

    public function update(){

    }

    public function delete(){

    }
}
