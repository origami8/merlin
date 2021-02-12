<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lager extends Model
{
    use HasFactory;

    protected $fillable =[
        "Gang", "Regal", "Fach", "Bestand", "ANr"
    ];

    public function Artikels(){
        return $this->belongsTo(Artikel::class);
    }
}
