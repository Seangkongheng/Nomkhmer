


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
                    <img src="/image/logo 1.png" alt=""></span>
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
             
                <p class="text-uppercase text-center mt-2">lis cart view</p>
             
                  <div class="table-view-cart">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if (session('success'))

                    @endif
                        <table class="table table-hover table-condensed">
                            <thead>
                                <th style="width: 50%">product</th>
                                <th>Price</th>
                                <th>Quanity</th>
                                <th>Subtotal</th>
                                <th >action</th>
                             
                            </thead>
                            <tbody>
                           
                               
                            @if(session('cart'))
                                @php
                                $total=0;

                               @endphp
                                    @foreach(session('cart') as $id => $detail)
                                    
                                    @php $total += $detail['priceout'] * $detail['qty'] @endphp
                                        <tr data-id="{{ $id }}">
                                          
                                            
                                            <td><p>{{ $detail['productName'] }}</p></td>
                                            <td><p>{{ $detail['priceout'] }}</p></td>
                                            {{-- <td><p>{{ $detail['stock'] }}</p></td> --}}
                                     
                                                 {{-- <div class="input-group text-center mb-3">
                                                <button class="input-group-text" onclick="decrementValue()" value="-" > - </button>
                                                      <input type="number" class="form-control text-center " id="number" value="{{ $detail['qty'] }}"/>
                                                     
                                                      <button class="input-group-text" onclick="incrementValue()" value="+" > + </button>
                                             
                                            </div>--}}
                                  @php
                                     $stock=$detail['stock'];
                                    $qty= $detail['qty'];
                                  @endphp
                                          
                                                 <td data-th="Qty">
                                                    @if ($stock >=  $qty)
                                                         <input type="number" value="{{ $detail['qty'] }}" class="cart_update form-control qty"  />
                                                    @else
                                                        <p class="text-danger">out stock</p>
                                                    @endif
                                                  </td>
                                     
                                         
                                         
                                   
                                      
                                            
{{-- <td>
    <div class="input-group quantity">
        <div class="input-group-prepend decrement-btn" style="cursor: pointer">
            <button class="input-group-text changQty">-</button>
        </div>
        <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{ $detail['qty'] }}">
        <div class="input-group-append increment-btn" style="cursor: pointer">
            <button class="input-group-text changQty">+</button>
        </div>
    </div>
</td> --}}

                                            <td class="text-center"><p>${{ $detail['priceout'] * $detail['qty']}}</p></td>
                                            
                                            <td><a href="{{url('/deletecart',$id) }}"class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                         
                                        </tr>
                             
                                    @endforeach
                                    
                              
                        
                           
                            </tbody>


                            <tfoot>
                                
                                    <td colspan="3" class="text-right"></td>
                                
                                    <td colspan="5" class="text-right"><strong >Total :  $  {{ $total }}</strong></td>
                                    <tr>
                                        <td colspan="2" class="text-right"></td>
                                        <td colspan="5" class="text-right">
                                            <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                            <a href="/checkout" class="btn btn-success"><i class="fa fa-money"></i> Checkout</a>
                                        </td>
                                    </tr>
                            </tfoot>
                            @endif
                                <td colspan="5" class="text-center text-right">            <?php
                                    if (session('cart')) {
                                       echo " ";
                                    }
                                    else {
                                       echo "No cart";
                                    }
                                    ?></td>
                        </table>

                  </div>
                
            </div>
 
        </div>

      
          
            {{-- --------------product------------- --}}
            





               
    </div>
    {{-- ------------andcontent------------- --}}
   
 {{-- <script>
        function incrementValue()
        {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            $(this).closest().find('number').val(value);
            // document.getElementById('number').value = value;
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

{{-- <script>
   $(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".qty").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
</script> --}}
   <script>
         $(document).ready(function () {

$('.increment-btn').click(function (e) {
    e.preventDefault();
    var incre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(incre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }

});

$('.decrement-btn').click(function (e) {
    e.preventDefault();
    var decre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(decre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }
});

});


// $('.changQty').click(function(e){

//     var qty=$(this).closest('.product-data').find('.qty-input').val;
// data={
//     'product_id':id,
//     'product_qty':stock,
 

// }
//     $.ajax({
//         method:"POST",
//         url:"update-cart"
//         data: data,
//         success:function(response){
//             alert(response)
//           }
//     });
// });


$(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".qty").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    
   </script>



</body>
</html>