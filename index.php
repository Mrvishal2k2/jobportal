<!-- 
  Copyright 2022
  Vishal R
  @MrVishal2k2 
  mrvishal2k2@pm.me
 -->
<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Never Too Late Start Posting for Jobs or start applying for jobs">
    <meta name="keywords" content="job, job portal, apply job, post a job">
  
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MrVishal_2k2">
    <meta name="twitter:title" content="JobPortal">
    <meta name="twitter:description" content="A portal to find jobs!">

    <title>JobPortal</title>
    <link rel="icon" type="image/x-icon" href="favicon.svg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS and JS-->
    <link href="assets/styles/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/styles/js/bootstrap.bundle.min.js"></script>


    <style>
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}
body {
  padding-bottom: 20px;
}
.navbar {
    background-color: #7952b3;
  margin-bottom: 10px;
}
.col-sm-6{flex:0 0 auto;width:auto} 

img {
    width:100%;
    height:120%;
    object-fit: cover;
 }
            

</style>

</head>


<body>

<main>
  <nav class="navbar navbar-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">JOB PORTAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="career.php">Careers - Apply Job</a>
          </li>
          <?php
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo '<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">PostJob Panel</a>
    <ul class="dropdown-menu" aria-labelledby="dropdown01">
      <li><a class="dropdown-item" href="admin">Panel</a></li>
      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    </ul>
  </li>';
}
else{
  echo'<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Post a Job</a>
  <ul class="dropdown-menu" aria-labelledby="dropdown01">
    <li><a class="dropdown-item" href="login.php">Login</a></li>
    <li><a class="dropdown-item" href="register.php">Register</a></li>
  </ul>
</li>';
}
?>

        </ul>
      </div>
    </div>
  </nav>
</main>




<div class="container-fluid row">

  <div class="col-sm-6">
  <img src="/assets/images/portalimg.jpg" alt="JobPortal" sizes="">
  </div>


  <div class="col-sm-6">
    <br>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Apply For Job</h5>
        <p class="card-text">In our online job portal, you can find all current vacancies and job offers worldwide.<br> We are looking forward to receive your online application.</p>
        <a href="career.php" class="btn btn-primary">Apply Now</a>
      </div>
    </div>

    <br>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Post a Job</h5>
        <p class="card-text">Reach professionals with just the right skills and experience. <br>Get great applicants fast. Post your free job in minutes.<br> Make a great hire fast!</p>
 
        <?php
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo '<a href="admin" class="btn btn-primary">JobPost Panel</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>';
}
else{
  echo'<a href="login.php" class="btn btn-primary">Login</a>
  <a href="register.php" class="btn btn-primary">Register</a>';
}
?>
      </div>
    </div>

  </div>
</div>


</body>

</html>
