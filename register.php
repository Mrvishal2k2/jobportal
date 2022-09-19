<!-- 
  Copyright 2022
  Vishal R
  @MrVishal2k2 
  mrvishal2k2@pm.me
 -->

<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin");
    exit;
}
?>


<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/295/295128.png">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

      <!-- Bootstrap core CSS -->
    <link href="assets/styles/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/styles/css/signin.css" rel="stylesheet">
    

</head>
<body class="text-center>
    <div class="container">
    <main class="form-signin">
    <form method="Post">
    <img class="mb-4" src=" https://cdn-icons-png.flaticon.com/512/863/863823.png" alt="" width="72" height="77">
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="name" placeholder="Me">
      <label for="Name">Full Name</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" placeholder="name@example.com">
      <label for="EMAIL">Email address</label>
    </div>

    <div class="form-floating">
      <input type="number" class="form-control" name="phone_no" placeholder="9876543210">
      <label for="Number">Phone Number</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" name="password" placeholder="Password">
      <label for="Password1">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" name="password2" placeholder="Password">
      <label for="Password2">Re-enter Password</label>
    </div>

    <div class="blank"></div>
    
    <button class="w-100 btn btn-lg btn-primary" name="register" type="submit">Create Account</button>
    <hr>
    <p style="text-align: center;"> <b>Already User?</b> <a href="login.php">Login</a> </p>
    <p class="mt-5 mb-3 text-muted">&copy;  MRVISHAL2K2 2022</p>
  </form>
    </div>
    </main>
</body>
</html>