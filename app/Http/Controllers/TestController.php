<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    function getAll(){
        $data = Test::all();
        return response($data, 200);
    }



}
