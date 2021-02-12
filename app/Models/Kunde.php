<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunde extends Model
{
    use HasFactory;

    protected $fillable =[
        "Vorname", "Nachname", "Strasse", "PLZ", "Ort", "Email", "Telefon", "GebDat"
    ];
}
