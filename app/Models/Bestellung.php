<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestellung extends Model
{
    use HasFactory;

    protected $fillable =[
        "BNr", "Anzahl", "Gesamtpreis", "KNr", "ANr"
    ];

    public function Kundes(){
        return $this->belongsTo(Kunde::class);
    }

    public function Artikels(){
        return $this->hasMany(Artikel::class);
    }
}
