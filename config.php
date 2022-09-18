<?php

$server = "sql5.freesqldatabase.com";
$user = "sql5520037";
$password = "BaxtpQAy7b";
$database = "sql5520037";


$conn = mysqli_connect($server, $user, $password, $database,3306);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "";



if(isset($_POST['register'])){
    $name = $_POST["name"];
    $phone_no = $_POST["phone_no"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if($password != $password2){
        echo "Both Passwords not matched";
    }
    else{
        $sql = "INSERT INTO `users` (`name`, `phone_no`, `email`, `password`) VALUES ('$name', '$phone_no', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Registered Successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}


if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        echo "Login successful";
        header("location:admin");

}
else{
    $error = "Your Login Name or Password is invalid";
    echo $error;
}

}

if(isset($_POST['postjob'])){
    $company_name = $_POST["companyname"];
    $position = $_POST["position"];
    $description = $_POST["description"];
    $skills = $_POST["skills"];
    $ctc = $_POST["ctc"];

    $sql = "INSERT INTO `jobposts`(`companyname`, `position`, `description`, `skills`, `ctc`) VALUES ('$company_name','$position','$description','$skills','$ctc')";
    if(mysqli_query($conn, $sql)){
        echo "Job posted successfully";
        
    }else{
        echo "Failed to post job" . mysqli_error($conn);
    }
}


if(isset($_POST['applyjob'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $jobpost = $_POST["jobpost"];
    $resume = $_POST["resume"];
    $qual = $_POST["qual"];
    $year = $_POST["year"];

    $sql = "INSERT INTO `candidates`(`name`, `email`, `jobpost`,`resume`, `qual`, `year`) VALUES ('$name','$email','$jobpost','$resume','$qual','$year')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Applied Successfully, You will get a call from the company if you are selected";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
session_start();

//mysqli_close($conn);

?>
