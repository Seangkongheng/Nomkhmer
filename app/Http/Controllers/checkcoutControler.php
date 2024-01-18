<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkcoutControler extends Controller
{
    public function index() {
        
        return view('FrondEnd.checkout.index');
    }
}
