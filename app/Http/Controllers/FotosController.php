<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotosController extends Controller
{
    public function returnViewFotos(){
        return view('fotos');
    }
}
