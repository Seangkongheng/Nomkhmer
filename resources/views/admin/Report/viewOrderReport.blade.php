@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/admin/css/material-dashboard.css">
<link rel="stylesheet" href="{{ URL::asset('admin/css/index.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <button class="btn btn-primary">Print <i class="fa-solid fa-print"></i></button> --}}
   <style>
        .logo-brand img{
        width: 180px;
      
    }
    .cart-body-invoice{
        width: 1010px;

    }
    .example-invoice{
        width: 200px;
        height: 200px;

    }
    .example-invoice-left{
        width: 500px;
        height: 200px;
    }
    .header-invoice{
        display: flex;
        gap: 1.2rem;
        justify-content: space-between;

    }
    .table{
        margin-top: 200px;
    }
    .style-table{
        margin-top: 200px;
    }
    .brand-company{
        width: 1000px;
        height: 200px;
    
        
    }
   </style>

    <div class="card">  
 
        <div class="container mt-5">
            <h1>Invoice</h1>
            <button type="button" class="btn btn-primary" onclick="window.print();"> <i class="fa-solid fa-print">  </i>   Print</button>
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-file-export"></i> Export</button>
            <a href="/report" class="btn btn-success"> <i class="fa-solid fa-backward"></i>  Back</a>

          <div class="header-invoice">
                <div class="example-invoice-left">
                   <p> <b class="text-danger"> BILL FROME</b></p>
                    <B>Address      : #61, Preah Monivong Blvd., Sangkat Srah Chork, Khan Daun Penh, Phnom </B> 
                    <b>Tel          : 011558927 / 0969907215</b>
                    <p><b>Admin     : Pen Techmeng</b></p>
                    <p> <b> Invoice : 0001010101010</p></b>
                    <p><b>company   : konkhkae.com</p> </b>
                </div>
                <div class="example-invoice">
                    <div class="logo-brand">
                        <img src="/image/logo 1.png" alt=""></span>
                     </div>
                </div>
          </div>
          <hr>
          <div class="information-costomer">
            <div class="header-invoice">
            <div class="example-invoice-left">
                <p class="title-nome text-dark"><b class="text-danger">Bill TO </b> </p>
                <p><b>Customer :  {{ $order->Fistname }} {{ $order->lastName }} </b></p>
                <p><B>Address  :  {{ $order->address1 }}</p></B>
               <p>  <b>Tel     :  {{ $order->phoneNum }}</p></b>
                <p><b> City    :  {{ $order->city }}</p></b>
                <p> <b>state   :  {{ $order->state }}</p></b>
                <p><b>contry   :   {{ $order->contry }}</p></b>
                <p><b>Gmail    : {{ $order->email }}</b></p>

            </div>
            <div class="example-invoice">
                <div class="logo-brand">
                 <b> <p>Invoice: 0010101010</p> </b> 
                <b> <p>Invoic date : {{ $order->created_at }}</p></b>
                 <b> <p>Invoic : </p></b>
                 </div>
            </div>
        </div>
          </div>
              <div class="row mt-5">
        
                <div class="col-md-5">
                    <div class="">
                        <div class="cart-body-invoice mt-5">
                            <div class="style-table">
                                <table class="table mt-5">
                                    <tr class="bg-success">
                                        <th class="col">name</th>
                                        <th class="col">qty</th>
                                        <th class="col">price</th>
                                        <th class="col">total</th>
                                        {{-- <th class="col">image</th> --}}
                                    </tr>
                                    @php
                                    $total = 0;
                                    $subTotal = 0;
                                @endphp
                                @foreach ($order->orderitem as $item)
                                    @php
                                        $total += $item->price * $item->qty;
                                        $subTotal += $total
                                    @endphp
                                    <tr>
                                        <tbody>
                                            <td><b>{{$item->products->productName}}</b></td>
                                            <td><b>{{ $item->qty }}</b></td>
                                            <td><b>{{ $item->price }}</b></td>
                                            <td><b>{{ $total }}</b></td>
                                            {{-- <td>
                                                <img src="{{ asset($item->products->image) }}" alt="" style="width: 50px;height: auto;">
                                            </td> --}}
                                        </tbody>
                                    </tr>
                                @endforeach
                                 
                                </table>
                               <hr style="box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;">
                                <h3><b> Sub Total   :  {{  $subTotal}} </h3>
                            
                            </div>
                            <hr>
                        </div>
                     </div>
                    </div>
                </div>
                 </div>
          
          </div>
            
        </div>

    </div>

    </div>

    </div>
  
@endsection