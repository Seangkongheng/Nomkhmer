@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
        
          <a class="btn btn-primary" href="catagory/create" class="text-white text-decoration-none">Add Catagroy</a>
        </div>
        <table class="table table-hover">
         <tr>
          <th>ID/th>
          <th>Name</th>
          <th>Email</th>
          <th>password</th>
          <th>Update</th>
          <th>status</th>
        
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
          
              <a class="btn btn-danger" href="{{ url('customerdelete/'.$item->id)}}">Delete</a>
              <a class="btn btn-primary" href="">Show</a>
             </td>
           </tbody>
         </tr>
      @endforeach
        </table>
      
    </div>
  
@endsection