@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
            .logo-brand img{
        width: 180px;
      
    }
       .header{
        display: flex;
        justify-content: space-between;
        align-content: center;
    }
    .header-center{
        text-align: center;
    }
</style>
    <div class="card">
        <div class="card-body">
        
            <button type="button" class="btn btn-primary" onclick="window.print();"> <i class="fa-solid fa-print">  </i>   Print</button>
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-file-export"></i> Export</button>
            <a href="/report" class="btn btn-success"> <i class="fa-solid fa-backward"></i>  Back</a>
        </div>
        <div class="header">
            <div class="hearder-left">
                <div class="example-box">
                 
                </div>
            </div>
            <div class="header-center">
                <div class="example-box">
                    <div class="logo-brand">
                        <img src="/image/logo 1.png" alt=""></span>
                     </div>
                   
                </div>
            </div>
            <div class="header-right">
                <div class="example-box">
                 
                </div>
            </div>
       </div>
        <table class="table table-hover">
         <tr>
          <th>ID/th>
          <th>Name</th>
          <th>Email</th>
          <th>password</th>
          <th>Update</th>
          {{-- 
          <th>status</th>
         --}}
         </tr>

         @foreach (   $customer as $item)
         <tr>
           <tbody>
             <td>{{ $item->id }}</td>
             <td>{{ $item->name}}</td>
             <td>{{ $item->email }}</td>
             <td>{{ $item->password }}</td>
             <td>{{ $item->created_at}}</td>
             <td>
          
              {{-- <a class="btn btn-danger" href="{{ url('customerdelete/'.$item->id)}}">Delete</a>
              <a class="btn btn-primary" href="">Show</a> --}}
             </td>
           </tbody>
         </tr>
      @endforeach
        </table>
      
    </div>
  
@endsection