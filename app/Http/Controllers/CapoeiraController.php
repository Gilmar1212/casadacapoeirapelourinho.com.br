<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapoeiraController extends Controller
{
    public function returnViewCapoeira(){
        return view('capoeira');
    }
}