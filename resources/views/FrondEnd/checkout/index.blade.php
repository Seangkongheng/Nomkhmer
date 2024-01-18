


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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

</head>

<body>
    
    
    <nav class="navbar navbar-light bg-light p-0">
  
        <div class="div container d-flex  justify-content-between  align-items-center h-20 d-inline-block">
            <div class="logo">
                <span class="bg-success p-1 text-white rounded">Welcome </span>  | 
            </div>
        
            <div class="logingLogout mt-3">
              
            <p class="small" >
              
        
            
            
            
            | My acount 
                   
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
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

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
                        <button type="button" class="btn position-relative">
                             <a href="/cart"><i class="fa fa-shopping-cart text-white"></i></a> 
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">

                                {{ count((array)session('cart') ) }}
                            </span>
        
                        </button>
                        <button type="button" class="btn position-relative">
                            <i class="fa fa-heart text-white"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"> 3 </span>
        
                        </button>
                        <button type="button" class="btn position-relative">
                            <div class="icon">
                                
                              <form action="resultsearch.php" method="get">
                                    <input class="text-white" type="text" name="user_query" id="" plasceholder="Search">
                                       
                                     <input type="submit" name="search"  value="search"> <i class="fa-sharp fa-solid fa-magnifying-glass text-white"></i> 
                                    </div>
        
                                  
                           
                              </form>
                             
                              
                    </div>
                   
                    <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#NavMenu">
                        <span class="navbar-toggler-icon"> </span>      
                    </button>
                  
                    <div class="collapse navbar-collapse  order-lg-1" id="NavMenu">
        
                       
        
        
                        <ul class="navbar-nav mx-auto text-center ">
                            <li class="nav-item px-2 py-2">
                                <a href="/" class="nav-link text-uppercase text-white" > home</a>
                            </li>
                            <li class="nav-item px-2 py-2">
                                <a href="#All-collection" class="nav-link text-uppercase text-white">collection</a>
                            </li>
                            <li class="nav-item px-2 py-2">
                                <a href="#specail" class="nav-link text-uppercase text-white">specail</a>
                            </li>
                            <li class="nav-item px-2 py-2">
                                <a href="#blogs" class="nav-link text-uppercase text-white">blogs</a>
                            </li>
                            <li class="nav-item px-2 py-2">
                                <a href="#about" class="nav-link text-uppercase text-white">about us</a>
                            </li>
                            <li class="nav-item px-2 py-2 border-0">
                                <a href="#popular" class="nav-link text-uppercase text-white">Popurlar</a>
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
             
               
        <div class="container mt-5">
                <form action="{{ route('placeorder') }}" method="POST">  
                        {{ csrf_field() }}
                       
                  <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="cart-body">
                                <h6> Basic Details</h6>
                                <hr>
                                <div class="row checkout_form">
                                    <div class="col-md-6">
                                        <label for="firstName"> first name</label>
                                        <input type="text" name="Fistname" class="form-control w-100" placeholder="Enter first name ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname"> last name</label>
                                        <input type="text" name="lastName" class="form-control w-100" placeholder="Enter last name ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Email"> Email</label>
                                        <input type="text" name="email" class="form-control w-100" placeholder="Enter Email ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="PhoneNumber"> Phone number</label>
                                        <input type="number" name="phoneNum" class="form-control w-100" placeholder="Enter phone ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Address1"> Adress1</label>
                                        <input type="text" name ="address1" class="form-control w-100" placeholder="Enter Address 1 ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address2">Addres2</label>
                                     <input type="text"  name="address2" class="form-control w-100" placeholder="Enter Addess 2">
                                    </div>   
                                    <div class="col-md-6">
                                        <label for="city">city</label>
                                        <input type="text" name="city" class="form-control w-100" placeholder="Enter city ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state">state</label>
                                        <input type="text"name="state" class="form-control w-100 " placeholder="Enter state">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="country">contry</label>
                                        <input type="text" name="contry" class="form-control w-100" placeholder="Enter country">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pinkCode">pink code</label>
                                        <input type="number" name="pincode" class="form-control w-100" placeholder="Enter pink code ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="cart-body">
                                <h6> Basic Details</h6>
                                <hr>
                                    <table class="table">
                                        <tr>
                                            <th class="col">name</th>
                                            <th class="col">qty</th>
                                            <th class="col">price</th>
                                        </tr>
                                       <tbody>
                                        @php
                                            $total=0;
                                        @endphp
                                        @if(session('cart'))
                                     
                                        @foreach(session('cart') as $id =>$detail)
                                        @php
                                            $total += $detail['priceout'] * $detail['qty'] @endphp
                                            <tr>
                                                <td><p>{{ $detail['productName'] }}</p></td>
                                                <td><p>{{ $detail['qty'] }}</p></td>
                                                <td><p>{{ $detail['priceout'] }}</p></td>
                                               
                                            </tr>
                                          
                                        @endforeach
                                        <td></td>
                                        <td>  total:</td>
                                       <td colspan="5" ><span><p class="text-danger">{{ $total }}</p></span></td>
                                     
                                        @endif
                                       </tbody>
                                    </table>
                            

                                 
                            </div>
                        </div>
                    </div>
                     </div>

                <button type="submit" class="btn btn-primary">Order</button>
                </form>
              </div>
                
            </div>
 
        </div>

      
          
            {{-- --------------product------------- --}}
            





               
    </div>
    {{-- ------------andcontent------------- --}}

   



</body>
</html>