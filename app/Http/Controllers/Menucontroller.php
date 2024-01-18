<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\productModel;
use Illuminate\Http\Request;

class Menucontroller extends Controller
{


    public function Types(){
        $cat=Catagory::all()->sortBy('id');
        return view('FrondEnd.menu.types',compact('cat'));
    }

    public function New (){


        $pro=productModel::all();
        return view('FrondEnd.menu.new',compact('pro'));

    }

    public function Contact_us(){
        return view('FrondEnd.menu.contactus');
    }
    
    public function DesertWater()
    {
        return view('FrondEnd.catagory.deserwater');
    }
    public function Desertsimple()
    {
        return view('FrondEnd.catagory.desertsimple');
    }
    public function sweat()
    {
        return view('FrondEnd.catagory.sweat');
    }
    public function Core_caked()
    {
        return view('FrondEnd.catagory.Core_cake');
    }
    public function baked_cake()
    {
        return view('FrondEnd.catagory.Baked_cakes');
    }

}
