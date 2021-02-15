<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ua extends Model
{
    use HasFactory;

    protected $fillable =[
        "astring", "ainteger", "aboolean", "adouble"
    ];
}
