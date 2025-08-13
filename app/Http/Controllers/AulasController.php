<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulasController extends Controller
{
       public function returnViewAulas(){
        return view("aulas");
    }
}
