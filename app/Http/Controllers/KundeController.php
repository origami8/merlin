<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunde;

class KundeController extends Controller
{
    public function createKunde(Request $request){

        $data = $request->validate([
            "KNr" => "numeric",
            "Vorname" => "",
            "Nachname" => "",
            "Strasse" => "",
            "PLZ" => "numeric",
            "Ort" => "",
            "Email" => "",
            "Telefon" => "",
            "GebDat" => ""
        ]);
        $kunde = Kunde::create($data);
        return response($kunde,200);
    }

    public function withRelations(){
        $kunde = Kunde::with('Mitgliedschaft', 'Bestellung')
            ->get();
        return response($kunde, 200);
    }
}
