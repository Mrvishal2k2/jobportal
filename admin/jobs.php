
<?php include 'header.php'?>


<style>
.pad15 {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
  margin-top: 20px;
}
</style>
<main class="container-fluid">

<div class="postjob">

<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post a Job
  </button>
</p>

<div class="collapse" id="collapseExample">
  <div class="card card-body">

    <!-- Form -->
    <form method="Post">
  <div class="mb-3">
    <label for="Cname" class="form-label">Company Name</label>
    <input type="text" name="companyname" class="form-control">
    </div>

    <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" name="position" class="form-control">
    </div>

    <div class="mb-3">
    <label for="description" class="form-label">Job Description</label>
    <input type="text" name="description" class="form-control">
    </div>

    <div class="mb-3">
    <label for="Skills" class="form-label">Skills</label>
    <input type="text" name="skills" class="form-control">
    </div>

    <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" name="ctc" class="form-control">
    </div>

  <button type="submit" name="postjob" class="btn btn-primary">Submit</button>
</form>


</div>
</div>



<div class="content pad15">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Description</th>
      <th scope="col">Skills</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
   <?php

    $sql = "SELECT * FROM jobposts";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows>0){
    $sno = 0;
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr>
      <th scope='row'>". ++$sno . "</th>
      <td>". $row['companyname'] . "</td>
      <td>". $row['position'] . "</td>
      <td>". $row['description'] . "</td>
      <td>". $row['skills'] . "</td>
      <td>". $row['ctc'] . "</td>
    </tr>";
    }
  }else {
    echo "";
  }

   ?>

  </tbody>
</table>
</div>

</main>

</body>
</html>