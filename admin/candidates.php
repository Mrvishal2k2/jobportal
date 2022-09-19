<!-- 
  Copyright 2022
  Vishal R
  @MrVishal2k2 
  mrvishal2k2@pm.me
 -->
<?php include 'header.php'?>
<?php include '../config.php'?>
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
        <h1>Applied Candidates</h1>
        <p>Here is a list of candidates applied for various job...</p>
    </div>
</div>





<div class="content pad15">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Position</th>
      <th scope="col">Qualification</th>
      <th scope="col">PassOutYear</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `candidates`";
    $result = mysqli_query($conn, $sql);
    $sno = 0;
    while($row = mysqli_fetch_assoc($result)){
        $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>" . $sno . "</th>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['jobpost'] . "</td>
        <td>" . $row['qual'] . "</td>
        <td>" . $row['year'] . "</td>
        <td><a href='" . $row['resume'] . "' target='_blank'>View Resume</a></td>
      </tr>";
    }
    ?>


  </tbody>
</table>
</div>

</main>

</body>
</html>