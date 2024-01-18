@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="../admin/css/material-dashboard.css">

<div class="card">
        <div class="card-body">
            <form class="" action="/catagory" method="POST">
                @csrf
                    <div class="">
                        <div class="">
                         
                            <label for="">Catagory name</label>
                            <input type="text" class="form-control" name="Catagroy_name">

                            <label for="">Description</label>
                            <input type="text" class="form-control" name="Decription"><br>
                            <button type="submit" class="btn btn-primary">Add</button>
                           <a class="btn btn-warning" href="/catagory">back</a>
                            @if (session('sucessfullyMessage'))
                            <p class="text-primary"> {{ session('sucessfullyMessage') }} </p> 
                           @endif
                        </div>
                    </div>
        
            </form>
        </div>
</div>
@endsection