<?php

namespace App\Http\Controllers;

use App\Models\customerModel;
use App\Models\order;
use App\Models\productModel;
use Illuminate\Http\Request;

class viewReportOrdercontroller extends Controller
{
    public function index($id){
        $order=order::where('id',$id)->first();
        return view('admin.Report.viewOrderReport',compact('order'));
    }

    public function view_customer_report(){
        $customer=customerModel::all();
       return view('admin.Report.customerReport',compact('customer'));
    }
    public function view_product_report()  {
        $pro=productModel::all()->sortBy('id');
        return view('admin.Report.productReport',compact('pro'));
    }
    
}
