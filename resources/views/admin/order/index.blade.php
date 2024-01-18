@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body bg-primary">
        <p class="text-white">New order</p>
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
                  <td><a class="btn btn-primary" href="{{ url('admin/view_order/'.$item->id) }}">view</a></td>
                </tbody>
            </tr>
          @endforeach
    
        
  
        </table>
    </div>
  
@endsection