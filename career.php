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
    <title>Career</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/4116/4116693.png">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="assets/styles/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    <script src="assets/styles/js/jquery-3.6.1.min.js"></script>

    <style>



body {
  padding-bottom: 20px;
}
.navbar {
    background-color: #7952b3;
  margin-bottom: 10px;
}
.col-sm-6{flex:0 0 auto;width:auto} 



.MultiCarousel { float: left; overflow: hidden; padding: auto; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
.pad15 {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
}
.wtf{
    float: right;
}
.mycol{flex:0 0 auto;height:auto; width:50%}
.mycol2{flex:0 0 auto;height:auto; width:auto}
</style>


<script>





    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});


</script>




<script>
    var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
</script>
</head>


<nav class="navbar navbar-dark" aria-label="NavBar">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Career</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
    <?php
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo '<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="admin">Admin Panel</a>
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

  
<body>
    



<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Apply Today</h1>
        <p>Start applying for various jobs suiting your profile...</p>
    </div>
</div>

<div class="container-fluid row">

    <div class="col-sm-6">
        <div>
           <img src="/assets/images/portalimg.jpg" alt="JobPortal" width=100% class="">
        </div>
    </div>

<div class="mycol">
<div class="slidecards">
    <?php

    $sql = "SELECT * FROM jobposts";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows>0){
        echo "<div class='MultiCarousel' data-items='1,3,5,1' data-slide='1' id='MultiCarousel'  data-interval='1000'>
        <div class='MultiCarousel-inner'>";
    $sno = 0;
    while($row = mysqli_fetch_assoc($result)){
    $sno = $sno + 1;
      echo "<div class='item'>
                <div class='pad15'>
                    <h3 ><b>". $row['position'] . "</b></h3>
                    <p>". $row['companyname'] . "</p>
                    <p>". $row['description'] . "</p>
                    <p>Skills: ". $row['skills'] . "</p>
                    <p>CTC: ". $row['ctc'] . "</p>
                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='VISHAL'>Apply</button>
                </div>
            </div>";
    } // end of while loop
echo "</div>
<button class='btn btn-primary leftLst'><</button>
<button class='btn btn-primary rightLst'>></button></div>";
// end of if loop

}else{

    echo "<div class='item'>
        <div class=''>
            <h3 ><b>No JOBS POSTED</b></h3>
            <p>Keep visiting us to get recent updates</p>
        </div>
    </div>";

}
?>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="Post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="jobpost">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Resume Url:</label>
            <input type="url" class="form-control" name="resume" ria-describedby="resumehelp">
            <div id="resumehelp" class="form-text">Gdrive Link to your resume.</div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Year of Passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="applyjob" class="btn btn-primary">Apply</button>
      </div>
    </div>
    </form>
  </div>
</div>



</body>

</html>