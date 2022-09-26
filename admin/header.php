<!-- 
  Copyright 2022
  Vishal R
  @MrVishal2k2 
  mrvishal2k2@pm.me
 -->
<?php
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<?php include '../config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/274-2748802_transparent-tech-support-icon-png-admin-login-images.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/assets/styles/css/bootstrap.min.css" rel="stylesheet">
    <script src="/assets/styles/js/bootstrap.bundle.min.js"></script>
    <!-- Source https://unsplash.com/photos/RYyr-k3Ysqg -->
    <!-- body{background-image: url('/assets/images/adminbackground.jpg');background-size:cover;} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  margin-bottom: 20px;
}


img {
    width:100%;
    height:100%;
    object-fit: cover;
}
            

body{
  background-color:#d2d6d7;
}


.collapse {
  &:not(.show) {
    display: none;
  }
}

.collapsing {
  height: 0;
  overflow: hidden;
  @include transition($transition-collapse);
}
</style>
</head>
<body>
    
  <nav class="navbar navbar-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="../admin">   Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../admin">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./jobs.php">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./candidates.php">Applied Candidates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
