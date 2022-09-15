
<?php include 'header.php'?>

<style>
.pad15 {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
  margin-top: 20px;
}
  .mybanner{
  background-color: #d1e6dd;
  background-size:cover;
}

</style>
<main class="container-fluid">

<div class="jumbotron jumbotron-fluid mybanner">
    <div class="container">
        <h1>Applied Canidiates</h1>
        <p>Here is a list of candidates applied for various job...</p>
    </div>
</div>





<div class="content pad15">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Vishal</td>
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