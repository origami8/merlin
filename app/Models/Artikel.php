<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable =[
        "ANr", "Name", "Hersteller", "Kategorie", "Preis"
    ];

    public function Bestellungs(){
        return $this->belongsToMany(Bestellung::class);
    }

    public function Lagers(){
        return $this->hasMany(Lager::class);
    }
}
