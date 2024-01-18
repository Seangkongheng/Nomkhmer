@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="../admin/css/material-dashboard.css">
<style>
    .form-select{
        display: block;
        width: 100%;
        padding: .375rem 2.25rem .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: right .75rem center;
        background-size: 16px 12px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
</style>
<div class="card">
        <div class="card-body">
            <form class="" action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">catagory</label>
                            <select class="form-select" name="cate_id" aria-label="Default select example" name="" id="">
                                <option selected>Select a Catagory</option>
                                
                                @foreach  (  $pro as $item)
                                    <option value="{{ $item->id }}">{{ $item->Catagroy_name}}</option>
                                    
                                @endforeach


                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">product name</label>
                            <input type="text" class="form-control" name="productName"><br>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">price in</label>
                            <input type="number" class="form-control" name="pricein"><br>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">price out</label>
                            <input type="number" class="form-control" name="priceout"><br>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">stock</label>
                            <input type="number" class="form-control" name="stock"><br>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">image</label>
                            <input type="file" class="form-control" name="image"><br>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Decription</label>
                            <textarea class="form-control" name="Description" id="" cols="30" rows="5">

                            </textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                           <a class="btn btn-warning" href="/catagory">back</a>
                            @if (session('sucessfullyMessage'))
                            <p class="text-primary"> {{ session('sucessfullyMessage') }} </p> 
                           @endif
                        
                    </div>
        
            </form>
        </div>
</div>
@endsection