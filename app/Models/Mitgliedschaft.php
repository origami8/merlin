<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitgliedschaft extends Model
{
    use HasFactory;

    protected $fillable =[
        "Rabattaktion", "Bindung", "Lafzeit", "KNr"
    ];

    public function Kundes(){
        return $this->belongsTo(Kunde::class);
    }
}
