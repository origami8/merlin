<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunde;

class KundeController extends Controller
{
    public function createKunde(Request $request){

        $data = $request->validate([
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
}
