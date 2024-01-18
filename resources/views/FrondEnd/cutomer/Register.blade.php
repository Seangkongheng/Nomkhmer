<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<style>

.form-register{
    position: absolute;
    top: 20%;
    left: 35%;
    align-items: center;
    width: 500px;
    
    background-color: rgb(255, 255, 255);
    padding: 50px;
    box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
}
</style>
<body>
   <div class="form-register">
        <h1 class="text-center">Register</h1>
        <form  class="mt-5" action="{{ URL('registercustomer') }}" method="POST">
            {{ csrf_field() }}
        <input type="text" class="form-control mb-3" name="name" placeholder="Name">
        <input type="email" class="form-control mb-3" name="email" placeholder="Email">
        <input type="password" class="form-control mb-3" name="password" placeholder="Password">
        <input type="password" class="form-control mb-3" name="password_confirmation" placeholder="Confirm Password">
        <button class="btn btn-primary float-end" type="submit">Register</button>
    </form> 
    <a class="text-decoration-none" href="/loginCustomer">Do you have account already?</a>
   </div>
        

</body>
</html>