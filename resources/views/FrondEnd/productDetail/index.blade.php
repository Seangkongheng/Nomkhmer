<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nome khmer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ URL::asset('admin/css/index.css') }}" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <style>
        .dropdown {
            margin-right: 10px;
        }

        .btn {
            border: 0px;
            margin: 10px 0px;
            box-shadow: none !important;
        }

        .dropdown-menu {
            width: 300px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            padding: 20px
        }

        .action-btn {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: space-between;
        }

        .total-header-section {
            border-bottom: 1px solid #d2d2d2;
        }

        .total-section p {
            margin-bottom: 20px;
        }

        .cart-detail {
            padding: 15px 0px;
        }

        .cart-detail-img img {
            width: 100%;
            height: 100%;
            padding-left: 15px;
        }

        .cart-detail-product p {
            margin: 0px;
            color: #000;
            font-weight: 500;
        }

        .cart-detail .price {
            font-size: 12px;
            margin-right: 10px;
            font-weight: 500;
        }

        .cart-detail .count {
            color: #000;
        }
    </style>
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-light bg-light p-0">

        <div class="div container d-flex  justify-content-between  align-items-center h-20 d-inline-block">
            <div class="logo">
                <span class="bg-success p-1 text-white rounded">Welcome </span> |
            </div>

            <div class="logingLogout mt-3">

                <p class="small">



                    | My acount

                </p>
            </div>
        </div>
    </nav>


    {{-- headernav end --}}

    <div class="brand">
        <span class="text-uppercase fw-lighter ms-2">
            <div class="logo-brand">
                <img src="/image/logo 1.png" alt="">
        </span>
    </div>
    </div>
    <style>
        .navbar {
            background-color: #940ED7;
        }
    </style>

    {{-- ------------navbar-------------- --}}
    <nav class="navbar text-white navbar-expand-lg navbar-light  py-0">

        <div class="container ">

            <a class="navbar-brand d-flex justify-content-between order-lg-0 " href="indeex2.php">

                <!--<img src="imag/brand.png" alt="site icon">-->
                <span class="text-uppercase fw-lighter ms-2">
                    <!-- <div class="logo-brand">
                                         <img src="image/logo 1.png" alt=""></span>
                                </div> -->

            </a>
            <div class="order-lg-2 nav-btns ">

                {{-- <a href="/cart"><i class="fa fa-shopping-cart text-white"></i></a> 
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">10</span> --}}

                <div class="action-btn d-flex">
                    <div class="dropdown">
                        <button class="btn position-relative" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown">
                            <i class="fa-solid fa-cart-plus text-white " aria-expanded="true"></i> <span
                                class="position-absolute top-0 start-100 translate-middle badge bg-primary">
                                {{ count((array) session('cart')) }}
                            </span>

                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class="row total-header-section">

                                @php
                                    $total = 0;
                                @endphp
                                @foreach ((array) session('cart') as $id => $detail)
                                    @php
                                        $total += $detail['priceout'] * $detail['qty'];
                                    @endphp
                                @endforeach

                                <div class="col-lg-12 col-sm-12 total-section text-right">
                                    <p>Total : <span class="text-success">{{ $total }}</span></p>
                                </div>
                            </div>

                            @if (session('cart'))

                                @foreach (session('cart') as $id => $detail)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img src="{{ asset($detail['image']) }}">
                                            {{--   <img src="{{ asset('img') }}/{{ $details['photo'] }}" /> --}}
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p>{{ $detail['productName'] }}</p>
                                            <span class="price text-info"> ${{ $detail['priceout'] }}</span> <span
                                                class="count"> Quantity:{{ $detail['qty'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center chechout">
                                    <a class="btn btn-primary" href="/view">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn position-relative">
                        <i class="fa fa-heart text-white"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"> 3 </span>

                    </button>

                    <button type="button" class="btn position-relative">
                        <div class="icon">

                            <form action="resultsearch.php" method="get">
                                <input class="text-white" type="text" name="user_query" id=""
                                    plasceholder="Search">

                                <input type="submit" name="search" value="search"> <i
                                    class="fa-sharp fa-solid fa-magnifying-glass text-white"></i>
                        </div>
                        </form>
                    </button>
                </div>
            </div>
            <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#NavMenu">
                <span class="navbar-toggler-icon"> </span>
            </button>

            <div class="collapse navbar-collapse  order-lg-1" id="NavMenu">
                <ul class="navbar-nav mx-auto text-center ">
                    <li class="nav-item px-5 py-2">
                        <a href="/nomkhmer" class="nav-link text-uppercase text-white">Home</a>
                    </li>
                    <li class="nav-item px-5  py-2">
                        <a href="/nomkhmer/new" class="nav-link text-uppercase text-white">New</a>
                    </li>
                    <li class="nav-item px-5  py-2">
                        <a href="/nomkhmer/types" class="nav-link text-uppercase text-white">Types</a>
                    </li>
                    <li class="nav-item px-5  py-2">
                        <a href="/nomkhmer/contactus" class="nav-link text-uppercase text-white">Contact us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    {{-- ----------------endnavar--------------- --}}
    {{-- ---containProduct--------- --}}
    <div class="show-all-product">
        <div class="left-product-catagory">

            <div class="scroler-container">
                <div class="cotainer-left">
                    <p>Type khmer</p>
                    <ul>
                        <li><a href="#All-collection">All collection</a></li>
                        <li><a href="#nom-angsom">Nom Ansom</a></li>
                        <li><a href="#nom-kong">Nom Kong</a></li>
                        <li><a href="#nom-kroch">Nom Kroch</a></li>
                        <li><a href="#nom-bompong">Nom bompong</a></li>

                        <li><a href="#nomjek">Nom Jek</a></li>
                        <li><a href="#nombot">Nom bot</a></li>
                    </ul>
                    <p>Fast food</p>
                    <ul>
                        <li><a href="#Hamber">Hambergur</a></li>
                        <li><a href="#sanwich">Sandwich</a></li>
                        <li><a href="#bread">Bread</a></li>
                        <li><a href="#Donout">Donout</a></li>

                        <li><a href="#Chocolate">chocolate</a></li>
                        <li><a href="#Cookies">cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-product-all-product">

            <div class="scroler-container">

                <div class="detail-nom">


                    <div class="image-detail">
                        <div class="image-nom-detail">
                            <div class="image">

                                @if (isset($product_detail->image) && !empty($product_detail->image))
                                    @php
                                        $images = json_decode($product_detail->image);
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
                        </div>
                    </div>
                    <div class="detail-decription">
                        <div class="decrtiption-nom mt-5">

                            <style>
                                i {
                                    color: lightgray;
                                }
                            </style>
                            <p class=""><i> 1$ =4100៛</i></p>
                            <p> Name : {{ $product_detail->productName }}</p>
                            {{-- <p> Orignal price            : <s> {{$product_detail->pricein }} </s> $</p> --}}
                            <p> Sell price : {{ $product_detail->priceout }}$ </p>
                            {{-- {{ $product_detail->id }} --}}

                            <p class="mt-5">Available :

                                @if ($product_detail->stock > 0)
                                    <label class="badge bg-success text-white" for="">in stock</label>
                                @else
                                    <label class="badge bg-danger" for="">Out stock</label>
                                @endif
                            </p>

                            <div class="row mt-2">
                                {{-- <div class="col-md-4">

                                        <label for="Qauniyt">Qaunity</label><br>
                                        <div class="input-group quantity">
                                            <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                <span class="input-group-text">-</span>
                                            </div>
                                            <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                            <div class="input-group-append increment-btn" style="cursor: pointer">
                                                <span class="input-group-text">+</span>
                                            </div>
                                        </div>

                                    </div> --}}
                                <div class="col-md-10">
                                    <br>
                                    @if ($product_detail->stock > 0)
                                        <a href="{{ url('/cart', $product_detail->id) }}"
                                            class="btn btn-primary addtocartBtn me-3 float-start">Add to card </a>
                                    @else
                                        <button class="btn btn-primary disabled">Add to card</button>
                                    @endif

                                    <button class="btn btn-success me-3 float-start">Add to list </button>

                                </div>
                            </div>
                            <div class="decriptiono-product mt-5">
                                <p>Decription :</p>
                                <p>{{ $product_detail->Description }}</p>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </div>
                <section id="nom-angsom">
                    <div class="title-nom">
                        <p class="">New releas</p>
                    </div>
                    <div class="box-all-product">
                        @if (isset($product_detail->image) && !empty(json_decode($product_detail->image)))
                            @php
                                $images = json_decode($product_detail->image);
                            @endphp
                            @foreach ($images as $key => $image)
                                @if ($key > 0)
                                    <div class="product">
                                        <img src="{{ asset('image-product/' . $image) }}" alt="">
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p>No Additional Images</p>
                        @endif
                    </div><br>

                </section>
            </div>




            {{-- --------------product------------- --}}
        </div>
        {{-- ------------andcontent------------- --}}



        {{--    
    
     <script>
        function incrementValue()
        {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }
        function decrementValue(){
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            if(value >1)
            {
                value--;
                 document.getElementById('number').value = value;
            }
           
        }
    </script> --}}


        <script>
            $(document).ready(function() {

                $('.increment-btn').click(function(e) {
                    e.preventDefault();
                    var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                    var value = parseInt(incre_value, 10);
                    value = isNaN(value) ? 0 : value;
                    if (value < 10) {
                        value++;
                        $(this).parents('.quantity').find('.qty-input').val(value);
                    }

                });

                $('.decrement-btn').click(function(e) {
                    e.preventDefault();
                    var decre_value = $(this).parents('.quantity').find('.qty-input').val();
                    var value = parseInt(decre_value, 10);
                    value = isNaN(value) ? 0 : value;
                    if (value > 1) {
                        value--;
                        $(this).parents('.quantity').find('.qty-input').val(value);
                    }
                });

            });
        </script>

</body>

</html>
