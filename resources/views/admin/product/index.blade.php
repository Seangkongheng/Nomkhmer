@extends('layouts.admin')

@section('content')
    <style>
        .card-body {
            padding: 30px;
        }
    </style>
    <div class="card">
        <div class="card-body">

            <a class="btn btn-primary" href="product/create" class="text-white text-decoration-none">Add Product</a>
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
                <th>Action</th>
            </tr>
            @foreach ($pro as $item)
                <tr>
                    <td>{{ $item->id }}</td>

                    <td>

                        <div class="image-class">
                            @if (isset($item->image) && !empty($item->image))
                            @php
                                $images = json_decode($item->image);
                            @endphp
                            @if (!empty($images) && isset($images[0]))
                                <img src="{{ asset('image-product/' . $images[0]) }}" alt="Product Image">
                            @else
                                <p>No Image</p>
                            @endif
                        @else
                            <p>No Image</p>
                        @endif
                        

                        </div>
                    </td>
                    <td>{{ $item->productName }}</td>
                    <td>{{ $item->pricein }}</td>
                    <td>{{ $item->priceout }}</td>
                    <td>
                        <p>{{ $item->stock }} </p>
                        @if ($item->stock > 0)
                            <i class="text-success"> stock in</i>
                        @else
                            <i class="text-danger"> stock out</i>
                        @endif


                    </td>



                    <td>{{ $item->Description }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td><a class="btn btn-warning" href="{{ url('edit_product/' . $item->id) }}">Edit</a>
                        <a class="btn btn-danger " href="{{ url('delete/' . $item->id) }}">Delete</a>
                    </td>

                </tr>
            @endforeach


        </table>
    </div>
@endsection
