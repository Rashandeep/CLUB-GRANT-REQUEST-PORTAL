<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style type="text/css">
    .bg{

}
.form-container{
  position: absolute;
  margin-top:50%;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px #000;
}
body{
  background-repeat: no-repeat;
background-image: url(blue.jpg);
  background-size: cover;
  background-attachment:fixed;
  background-position:center;
}
#login{
  font-size: 30px;
}
  </style>
</head>
<body>
  
  

    <section class="container-fluid bg">
      <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">

  <form class="form-container" action="headlogin.php" method="POST">
    <p class="text-center font-weight-bold" id="login">Head Login</p>
  <div class="form-group">
    
    <label for="username">Username</label>
    <input type="text" required="required" class="form-control" id="username" aria-describedby="emailHelp" name="username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required="required" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  </div>
 
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
</form>
</section>
</section>
</section>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>


