<?php

namespace App\Http\Controllers;

use App\Models\customerModel;
use Illuminate\Http\Request;

class customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer=customerModel::all();
        return view('admin.customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function CustomerDelete(string $id)
    {
        customerModel::find($id)->delete();

        return Redirect('/customer')->with('status',"cutomer Deleted successfull");
 
    }
}
