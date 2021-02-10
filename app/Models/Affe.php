<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affe extends Model
{
    use HasFactory;

    protected $fillable =[
    "one_to_ten","yes_no", "fistname", "lastname"
];


}
