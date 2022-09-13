<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/assets/styles/css/bootstrap.min.css" rel="stylesheet">
    <script src="/assets/styles/js/bootstrap.bundle.min.js"></script>
    <!-- Source https://unsplash.com/photos/RYyr-k3Ysqg -->
    <style>

body{
  background-image: url('/assets/images/adminbackground.jpg');
  background-size:cover;
}
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
            


</style>
</head>
<body>
    

<main>
  <nav class="navbar navbar-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./jobs.php">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./candidates.php">Applied Candidates</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</main>



<div class="container-fluid row">

<div class="col-sm-6">
  <img src="/assets/images/admin.jpg" alt="Admin">
  </div>


  <div class="col-sm-6">
    <br>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Post a Job</h5>
        <p class="card-text">Post your free job in minutes.<br> Make a great hire fast!</p>
        <a href="jobs.php" class="btn btn-primary">Post Now</a>
      </div>
    </div>

    <br>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Applied Candidates</h5>
        <p class="card-text">Checkout who applied for Job Roles</p>
        <a href="candidates.php" class="btn btn-primary">Check Candidates</a>
      </div>
    </div>

  </div>
</div>


</body>
</html> 