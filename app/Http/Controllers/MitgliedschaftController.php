<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitgliedschaft;

class MitgliedschaftController extends Controller
{
    function getAll(){
        $data = Mitgliedschaft::all();
        return response($data, 200);
    }

    public function createMitgliedschaft(Request $request){

        $data = $request->validate([
            "Rabattaktion" => "",
            "Bindung" => "",
            "Laufzeit" => "numeric"
        ]);
        $mitgliedschaft = Mitgliedschaft::create($data);
        return response($mitgliedschaft,200);
    }

    public function withRelations(){
        $mitgliedschaft = Mitgliedschaft::with('Kunde')
            ->get();
        return response($mitgliedschaft, 200);
    }
}
