@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/admin/css/material-dashboard.css">
<link rel="stylesheet" href="{{ URL::asset('admin/css/index.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .form-select{

  min-width: 15ch;
  max-width: 30ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 1.25rem;
  cursor: pointer;
  line-height: 1.1;
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
    }
</style>
    {{-- <button class="btn btn-primary">Print <i class="fa-solid fa-print"></i></button> --}}
    <button type="button" class="btn btn-primary" onclick="window.print();">Print</button>

    <div class="card">
     
        <div class="card-body bg-primary">
        <p class="text-white">New order</p>
        </div>  
        <div class="container mt-5">
           
                   
              <div class="row">
                <div class="col-md-7">
                    <div class="card">
              
                        <div class="cart-body">
                            <h6> Basic Details</h6>
                            <hr>
                            <div class="row checkout_form">
                                <div class="col-md-6">
                                    <label for="firstName"> first name</label>
                                <div><b>{{ $order->Fistname }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname"> last name</label>
                                    <div><b>{{ $order->lastName }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="Email"> Email</label>
                                    <div><b>{{ $order->email }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="PhoneNumber"> Phone number</label>
                                    <div><b>{{ $order->phoneNum}} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="Address1"> Adress1</label>
                                    <div><b>{{ $order->address1 }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="address2">Addres2</label>
                                    <div><b>{{ $order->address2 }} </b> </div>
                                </div>   
                                <div class="col-md-6">
                                    <label for="city">city</label>
                                    <div><b>{{ $order->city }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="state">state</label>
                                    <div><b>{{ $order->state }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="country">contry</label>
                                    <div><b>{{ $order->contry }} </b> </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="pinkCode">pink code</label>
                                    <div><b>{{ $order->pincode }} </b> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="cart-body">
                            <h6> Basic Details</h6>
                            <hr>
                                <table class="table">
                                    <tr>
                                        <th class="col">name</th>
                                        <th class="col">qty</th>
                                        <th class="col">price</th>
                                        <th class="col">total</th>
                                        <th class="col">image</th>
                                    </tr>
                                    @php
                                    $total = 0;
                                    $subTotal = 0;
                                @endphp
                                @foreach ($order->Orderitem as $item)
                                    @php
                                        $total += $item->price * $item->qty;
                                        $subTotal += $total
                                    @endphp
                                    <tr>
                                        <tbody>
                                        <td>{{ $item->products->productName }}</td>
                                            <td><b>{{ $item->qty }}</b></td>
                                            <td><b>{{ $item->price }}</b></td>
                                            <td><b>{{ $total }}</b></td>
                                            <td>
                                                <img src="{{ asset($item->products->image) }}" alt="" style="width: 50px;height: auto;">
                                            </td>
                                        </tbody>
                                    </tr>
                                @endforeach
                                 
                                </table>
                               
                                <p><b> sub total    {{  $subTotal}} </b> </p>
                              <div class="mt-5">
                                <label for="" class="text-danger">Order status</label>
                                <form action="{{ url('/update_order_end/'.$order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-select" name="orderstatus">
                                        <option {{ $order->status == '0'? 'selected': ''}} value="0"><p class="text-danger">pending </p> </option>
                                        <option {{ $order->status == '1'? 'selected': ''}} value="1">  <p class="text-success">  commit</p></option>
                                      </select>
                                    <button type="submit" href="" class="btn btn-primary flaot-end">update</button>
                                </form>
                               
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