@extends('layouts.admin')

@section('content')
<style>
.card-body{
    padding: 30px;
}
</style>
    <div class="card">
        <div class="card-body">
        
          <a class="btn btn-primary" href="adminshow/create" class="text-white text-decoration-none">Add admin</a>
        </div>
        <table class="table table-hover">
         <tr>
          <th>ID</th>
          <th>name</th>
          <th>email </th>
          <th>password</th>
          <th>role_as</th>

          <th>Action</th>
         </tr>
         @foreach ( $user as $item )
             <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email  }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->role_as}}</td>
      
                <td>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
             </tr>
         @endforeach
         
  
        </table>
    </div>
  
@endsection