@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.card-body{
    padding: 30px;

}
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
        <div class="header">
            <div class="hearder-left">
               
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
        <div class="card-body">
        
            <button type="button" class="btn btn-primary" onclick="window.print();"> <i class="fa-solid fa-print">  </i>   Print</button>
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-file-export"></i> Export</button>
            <a href="/report" class="btn btn-success"> <i class="fa-solid fa-backward"></i>  Back</a>
        </div>
        <table class="table table-hover">
         <tr>
          <th>ID</th>
          {{-- <th>Catagory Name</th> --}}
          <th>image</th>
          <th>Name</th>
          <th>price in </th>
          <th>price out</th>
          <th>stock</th>
          <th>Decription</th>
          <th>Create Date</th>
          {{-- <th>Action</th> --}}
         </tr>
         @foreach (  $pro as $item )
             <tr>
                <td>{{$item->id}}</td>
                
                <td>
       
                    <div class="image-class">
                       {{-- <img src="{{asset('/images/'.$item->image) }}" alt="">  --}}
                     <img src="{{ asset($item->image) }}" alt="" style="width: 100px;height: autp;">

                    </div>
                </td>
                <td>{{$item->productName}}</td>
                <td>{{$item->pricein}}</td>
                <td>{{$item->priceout}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->Description}}</td>
                <td>{{$item->created_at}}</td>
               {{-- <td><a class="btn btn-warning" href="{{ url('edit_product/'.$item->id) }}">Edit</a>
                <a class="btn btn-danger " href="{{ url('delete/'.$item->id)}}">Delete</a></td>

             </tr> --}}
         @endforeach
         
  
        </table>
    </div>
  
@endsection