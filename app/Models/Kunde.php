<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunde extends Model
{
    use HasFactory;

    protected $fillable =[
        "KNr", "Vorname", "Nachname", "Strasse", "PLZ", "Ort", "Email", "Telefon", "GebDat"
    ];

    public function Bestellungs(){
        return $this->hasMany(Bestellung::class);
    }

    public function Mitgliedschafts(){
        return $this->hasMany(Mitgliedschaft::class);
    }
}
