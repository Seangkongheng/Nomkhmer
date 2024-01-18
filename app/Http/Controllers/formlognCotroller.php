<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formlognCotroller extends Controller
{
    public function formlogout(){
        return view('auth.login');
    }
}
