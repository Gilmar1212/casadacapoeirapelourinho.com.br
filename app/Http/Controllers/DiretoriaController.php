<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiretoriaController extends Controller
{
    public function returnViewDiretoria(){
        return view("a-diretoria");
    }
}
