<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class viewReportController extends Controller
{
    public function index()
    {
        $order=order::all()->sortBy('id');
        if($order){
            return view('admin.Report.Order',compact('order'));
        }
        session()->flash('status', 'No record found.');
    }
}
