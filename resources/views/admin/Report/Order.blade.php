@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .logo-brand img{
        width: 180px;
        margin-top: -15px;
    }
    .example-box{
        width: 300px;
        height: 200px;
;

       
    }
    .example-box-left{
        width: 550px;
        height: 200px;
    
    }
    .header{
        display: flex;
        justify-content: space-between;
        align-content: center;
    }
    .header-center{
        text-align: center;
    }
    .title-nome p{
        font-size: 20px;
    }
</style>
    <div class="card">
       <div class="header">
            <div class="hearder-left">
                <div class="example-box-left">
                    <p class="title-nome">Nom khmer</p>
                    
                   <B>Address: </B> <span>#61, Preah Monivong Blvd., Sangkat Srah Chork, Khan Daun Penh, Phnom </span>
                   <b>Tel:</b><span>011558927 / 0969907215</span>
                   <p><b>Admin : Pen Techmeng</b></p>
                   <p> <b> Invoice</b> : 0001010101010</p>
                   <p><b>company : </b> konkhkae.com</p>
                </div>
            </div>
            <div class="header-center">
                <div class="example-box">
                    
                   
                </div>
            </div>
            <div class="header-right">
                <div class="example-box">
                    <div class="logo-brand">
                        <img src="image/logo 1.png" alt=""></span>
                     </div>
                </div>
            </div>
       </div>
        <div class="card-body bg-primary">
            <button type="button" class="btn btn-primary" onclick="window.print();"> <i class="fa-solid fa-print">  </i>   Print</button>
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-file-export"></i> Export</button>
            <a href="/report" class="btn btn-success"> <i class="fa-solid fa-backward"></i>  Back</a>
        </div>
        <table class="table table-hover">
         <tr>
          <th>Order Date</th>
          <th>Fist name </th>
          <th>Last name</th>
          <th>phone number</th>
          <th>Address</th>
          <th>status</th>
          <th>Action</th>
         </tr>
 
          @foreach ($order as $item )
            <tr>
                <tbody>
                  <td>{{ $item->created_at }}</td>
                  
                  <td>{{ $item->Fistname }}</td>
                  <td>{{ $item->lastName}}</td>
                  <td>{{ $item->phoneNum}}</td>
                  <td>{{ $item->address1}}</td>
                  <td>{{ $item->status==0 ? 'pending':'complete' }}</td>
                  <td><a class="btn btn-primary" href="{{ url('admin/view_order_report/'.$item->id) }}">view</a></td>
                </tbody>
            </tr>
          @endforeach
    
        
  
        </table>
    </div>
  
@endsection