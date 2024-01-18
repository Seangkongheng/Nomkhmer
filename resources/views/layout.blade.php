<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ URL::asset('admin/css/index.css') }}"/>
    <title>Document</title>
</head>
<body>
    




    <div class="order-lg-2 nav-btns ">
        <div class="action-btn d-flex">
            <div class="dropdown">
                <button class="btn position-relative" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-cart-plus text-white " aria-expanded="true"></i>    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"> 3 </span>
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="row total-header-section">   
                        <div class="col-lg-12 col-sm-12 total-section text-right">
                            <p>Total : <span class="text-success">0</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center chechout">
                          <a class="btn btn-primary" href="">View All</a>
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
                    <input class="text-white" type="text" name="user_query" id="" plasceholder="Search">
                       
                     <input type="submit" name="search"  value="search"> <i class="fa-sharp fa-solid fa-magnifying-glass text-white"></i> 
                    </div>

                  
           
              </form>
        </button>
    </div>

</div>
</body>
</html>
