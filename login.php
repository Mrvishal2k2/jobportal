<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
    <title>Login</title>
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
    <img class="mb-4" src=" https://cdn-icons-png.flaticon.com/512/3711/3711310.png" alt="" width="62" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="EMAIL">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="Password">Password</label>
    </div>
    
    <div class="blank"></div>

    <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Login</button>
    <hr>
    <p style="text-align: center;"> <b>New User?  </b> <a href="register.php">Register</a> </p>
    <p class="mt-5 mb-3 text-muted">&copy;  MRVISHAL2K2 2022</p>
  </form>
    </div>
    </main>
</body>
</html>