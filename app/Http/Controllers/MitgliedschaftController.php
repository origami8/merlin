<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitgliedschaft;

class MitgliedschaftController extends Controller
{
    public function createMitgliedschaft(Request $request){

        $data = $request->validate([
            "MNr" => "numeric",
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
