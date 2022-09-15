
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
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="companyname">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Position</label>
    <input type="text" class="form-control" id="position">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="jobdescription">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CTC</label>
    <input type="text" class="form-control" id="ctc">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
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
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Tester</td>
      <td>7LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Infosys</td>
      <td>Web Developer</td>
      <td>10LPA</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Accenture</td>
      <td>Graphic designer</td>
      <td>30LPA</td>
    </tr>
  </tbody>
</table>
</div>

</main>

</body>
</html>