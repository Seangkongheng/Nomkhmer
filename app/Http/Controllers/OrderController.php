<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order=order::all()->sortBy('id');
        if($order){
            return view('admin.order.index',compact('order'));
        }
        session()->flash('status', 'No record found.');
   
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
         $order=order::find($id);
         $order->status=$request->input('orderstatus');
         $order->update();
         return redirect('order')->with('status',"Order update sessfull");

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function view($id){
        
        $order=order::where('id',$id)->first();
        return view('admin.order.viewOrder',compact('order'));
    }
}
