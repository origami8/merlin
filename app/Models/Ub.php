<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ub extends Model
{
    use HasFactory;

    protected $fillable =[
        "uas_id", "bstring", "binteger", "bboolean", "bdouble"
    ];

    public function Ua(){
        return $this->belongsTo(Ua::class);
    }

    public function withRelations(){
        $ua = Ua::with('Ub')->get();
        return response($ua, 200);
    }
}
