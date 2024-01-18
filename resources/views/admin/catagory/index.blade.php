@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
        
          <a class="btn btn-primary" href="catagory/create" class="text-white text-decoration-none">Add Catagroy</a>
        </div>
        <table class="table table-hover">
         <tr>
          <th>Catagory id</th>
          <th>Catagory Name</th>
          <th>Decription</th>
          <th>Action</th>
         </tr>

         @foreach (  $cat as $catagory_show)
            <tr>
              <tbody>
                <td>{{ $catagory_show->id }}</td>
                <td>{{ $catagory_show->Catagroy_name }}</td>
                <td>{{ $catagory_show->Decription }}</td>
                <td>
                  {{-- <button  class="btn btn-warning">Edit</button> --}}
                  {{-- <button class="btn btn-danger">Delete</button> --}}
                  <a class="btn btn-warning" href="catagory/{{$catagory_show->id}}/edit">Edit</a>
                  {{-- <td class="center"><a href="{{URL::to('/deletecat/'.$category->name) }}"><span class="glyphicon glyphicon-trash"></span></a></td> --}}

                  <a class="btn btn-danger" href="{{ url('deletecat/'.$catagory_show->id)}}">Delete</a>
                  <a class="btn btn-primary" href="">Show</a>
                  {{-- <td><a href="/admin/admin-bock/{{ $admin  ->id }}" class="text-decoration-none text-danger btn btn-warning">show</a></td> --}}
                </td>
                {{-- <td><a href="/admin/Admin-block/{{ $admin ->id }}/edit" class="text-decoration-none text-danger btn btn-warning">Edit</a></td>
                <td><a href="/admin/admin-bock/{{ $admin  ->id }}" class="text-decoration-none text-danger btn btn-warning">show</a></td> --}}
              </tbody>
            </tr>
         @endforeach
  
        </table>
    </div>
  
@endsection