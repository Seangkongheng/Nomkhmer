<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Catagorycotroler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = ProductModel::all()->sortByDesc('id');
        // return view ('admin.product.index',compact('product'));
        $cat=Catagory::all()->sortBy('id');
        return view('admin.catagory.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Catagory::create($request->all());
        return redirect('/catagory')->with('status',"Catagory Add successfull");
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat = Catagory::find($id);
        return view('admin.catagory.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Catagory::find($id)->update([
            'Catagroy_name'=>$request->input('Catagroy_name'),
            'Decription'=>$request->input('Decription')

        ]);
        return redirect('/catagory')->with('status',"Catagory update successfull");
        



  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function Delete(string $id)
    {
        Catagory::find($id)->delete();

        return Redirect('/catagory')->with('status',"Catagory Deleted successfull");

    }
    
}
