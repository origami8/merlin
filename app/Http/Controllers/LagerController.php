<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lager;

class LagerController extends Controller
{
    public function createLager(Request $request){

        $data = $request->validate([
            "Gang" => "numeric",
            "Regal" => "numeric",
            "Fach" => "numeric",
            "Bestand" => "numeric"
        ]);
        $lager = Lager::create($data);
        return response($lager,200);
    }

    public function withRelations(){
        $lager = Lager::with('Artikel')
            ->get();
        return response($lager, 200);
    }
}
