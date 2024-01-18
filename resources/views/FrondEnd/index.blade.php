<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nome khmer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('admin/css/index.css') }}" />

<style> .dropdown{
   


     
}
.btn{
    border:0px;
    margin:10px 0px;
    box-shadow:none !important;
}
.dropdown-menu{
width: 300px;

}
.action-btn{
display: flex;
align-content: center;
align-items: center;
justify-content: space-between;


}
.total-section p{
    margin-bottom:20px;
}
.cart-detail{
    padding:15px 0px;
}
.cart-detail-img img{
    width:100%;
    height:100%;
    padding-left:15px;
}
.cart-detail-product p{
    margin:0px;
    color:#000;
    font-weight:500;
}
.cart-detail .price{
    font-size:12px;
    margin-right:10px;
    font-weight:500;
}
.cart-detail .count{
    color:#000;
}

</style>
</head>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>  
  <link rel="stylesheet" href="/resources/demos/style.css">  
 
  <script>  

      var availableTags = []; 
       $.ajax({
        method:"GET",
        url:"/product-list",
        success:function(response){
            autocomplete(availableTags);
        }
       });

       function autocomplete(availableTags)
       {
        $( "#search_product" ).autocomplete({  
             source: availableTags  
         });  
       }
      
    </script>


<body>


    <nav class="navbar navbar-light bg-light p-0">
  
        <div class="div container d-flex  justify-content-between  align-items-center h-20 d-inline-block">
            <div class="logo">
                <span class="bg-success p-1 text-white rounded">Welcome </span>  | 

            </div>
        
            <div class="logingLogout mt-3">
              
            <p class="small" >
              
            | My acount 
            <a  class="btn btn-primary" href="/cutomer">Register</a>
                   
        </p>
            </div>
        </div>
        </nav>


        {{-- headernav end --}}

        <div class="brand"> 
            <span class="text-uppercase fw-lighter ms-2">
                <div class="logo-brand">
                    <img src="image/logo 1.png" alt=""></span>
                 </div>
        </div>
<style>
    .navbar{
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
                        <div class="action-btn d-flex">
                            <div class="dropdown">
                                <button class="btn position-relative" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-cart-plus text-white " aria-expanded="true"></i>    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">
                                        {{ count((array)session('cart') ) }}
                                    </span>
                                 
                                </button>
    
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                   <div class="row total-header-section"> 
                                    
                                    @php
                                        $total=0
                                    @endphp
                                    @foreach ((array) session('cart') as $id=>$detail)
                                        @php
                                            $total+=$detail['priceout']*$detail['qty']
                                        @endphp
                                    @endforeach
    
                                        <div class="col-lg-12 col-sm-12 total-section text-right">
                                            <p>Total : <span class="text-success">{{ $total }}</span></p>
                                        </div>
                                    </div>
    
                                @if(session('cart'))
    
                            @foreach(session('cart') as $id =>$detail)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ asset($detail['image']) }}">
                                        {{--   <img src="{{ asset('img') }}/{{ $details['photo'] }}" /> --}}
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $detail['productName'] }}</p>
                                        <span class="price text-info"> ${{ $detail['priceout'] }}</span> <span class="count"> Quantity:{{ $detail['qty'] }}</span>
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
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">   {{ count((array)session('cart') ) }}</span>
        
                        </button>
    
                        <button type="button" class="btn position-relative">
                            <div class="icon">
                                
                              <form action="resultsearch.php" method="get">
                                    {{-- <input class="text-white" type="text" name="user_query" id="" plasceholder="Search"> --}}
                                       
                                     <input type="search" id="search_product" placeholder="search here "> <i class="fa-sharp fa-solid fa-magnifying-glass text-white"></i> 
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
                                <a href="/nomkhmer" class="nav-link text-uppercase text-white" >Home</a>
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

                        @foreach (  $cat as $item )
                                <li ><a href="{{ 'viewcatagory/'.$item->id }}">
                                    {{ $item->Catagroy_name}}
                                </a></li>
                        @endforeach
                         {{-- <li><a href="#All-collection">All collection</a></li>
                        <li><a href="#desert_simple">Desert/simple</a></li>
                        <li><a href="#desert_water">Desert/water</a></li>
                        <li><a href="#desert_fresh">Desert/Fresh</a></li>
                        <li><a href="#bake_cake">Baked cakes</a></li>

                        <li><a href="#sweat">Sweat</a></li>
                        <li><a href="#core-cake">Core cake</a></li> --}}
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

          
             <section id="All-collection">
                <div class="title-nom">
                     <p class="">collection</p>
                </div>

             <div class="box-all-product">

            {{-- --------------product------------- --}}
            @foreach (  $pro as $item)
                    <div class="product">

                                <a href="{{ url('/productDetail',$item->id) }}">
                                    <div class="image">
                                        <img src="{{ asset($item->image) }}" alt="">
                                    </div>
                                </a>
                                
                                <div class="price">
                                    <p class="text-danger">{{ $item->priceout}} $</p>
                                </div>
                                <div class="title">
                                    <p>{{ $item->productName }}</p>
                                </div>
         
                       
                    </div>
             @endforeach

            {{-- --------------product------------- --}}
        </div> 
    </div>
   
   

    {{-- ------------andcontent------------- --}}

</body>
</html>