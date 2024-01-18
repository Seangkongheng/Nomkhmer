@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/admin/css/material-dashboard.css">

<div class="card">
        <div class="card-body">
            <form action="/catagory/{{$cat->id}}" method="POST">
                @csrf
                {{ method_field('put') }}
                    <div class="">
                        <div class="">
                         
                            <label for="">Catagory name</label>
                            <input type="text" class="form-control"  value="{{ $cat ->Catagroy_name}}"  name="Catagroy_name">

                            <label for="">Description</label>
                            <input type="text" class="form-control" value="{{ $cat ->Decription}}"  name="Decription"><br>
                            <button type="submit" class="btn btn-primary">update</button>
                            <button type="submit" class="btn btn-warning">Back</button>
                            @if (session('sucessfullyMessage'))
                            <p class="text-primary"> {{ session('sucessfullyMessage') }} </p> 
                           @endif
                        </div>
                    </div>
        
            </form>
        </div>
</div>
@endsection