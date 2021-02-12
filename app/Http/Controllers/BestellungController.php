<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bestellung;

class BestellungController extends Controller
{
    public function createBestellung(Request $request){

        $data = $request->validate([
            "Anzahl" => "numeric",
            "Gesamtpreis" => "numeric",
            "Bezahlt" => "boolean"
        ]);
        $bestellung = Bestellung::create($data);
        return response($bestellung,200);
    }

    public function Kundes(){
        return $this->belongsTo(Kunde::class);
    }
    public function withRelations(){
        $bestellung = Bestellung::with('Artikel', 'Kunde')
            ->get();
        return response($bestellung, 200);
    }
}
