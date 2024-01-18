<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
    .form-login{
        width: 500px;
        padding-left: 100px;
        padding-right: 100px;
        padding-top: 50px;
        padding-bottom: 50px;
        box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
        position: absolute;
        top: 30%;
        left: 35%;
        text-align: center;
    }
    .logo-brand img{
        
        width: 150px;
    }
</style>
<body>
    <div class="form-login">
            <div class="brand">
                <div class="logo-brand">
                    <img src="/image/logo 1.png" alt=""></span>
                 </div>
            </div>
        <form  action="{{ URL('loginCustomerbuy') }}" method="POST">
            {{ csrf_field() }}
         <input type="email" class="form-control mb-3" name="email" placeholder="Email">
         <input type="password" class="form-control mb-3" name="password" placeholder="Password">
         <button type="submit" class="btn btn-primary float-end">login</button>
         <a href="/cutomer" class="float-start"> Forgot acout ?</a>
     </form> 
    </div>
        

</body>
</html>