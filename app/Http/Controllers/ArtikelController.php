<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    function getAll(){
        $data = Artikel::all();
        return response($data, 200);
    }

    public function createArtikel(Request $request){

        $data = $request->validate([
            "Name" => "",
            "Hersteller" => "",
            "Kategorie" => "numeric",
            "Preis" => "numeric"
        ]);
        $artikel = Artikel::create($data);
        return response($artikel,200);
    }

    public function withRelations(){
        $artikel = Artikel::with('Lager', 'Bestellung')
            ->get();
        return response($artikel, 200);
    }
}
