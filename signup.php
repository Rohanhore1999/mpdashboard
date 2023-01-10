<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 include 'partials/_dbconnect.php';
 $Username = $_POST["Username"];
 $password = $_POST["password"];
 $cpassword = $_POST["cpassword"];
 $exists=false;
 if(($password == $cpassword) && $exists==false){
    $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$Username', '$password', current_timestamp())";

    $result = mysqli_query($conn, $sql);
    if ($result){
        $showAlert = true;
    }

 } 
    else{
     $showError = "Password do not match";
 }

}
?>

<!doctype html>
<html lang="eng" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php 
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Success!</strong> Your account is now created and you can login
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error!</strong> '. $showError.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    ?>
    <style>
          @media (min-width: 1200px) {
    .container{
        max-width: 540px;
    }
    body {
        background-image: url("https://mercadosemi.in/images/slider/banner3_n.jpg");
    }
    h1 {
        color: rgb(210, 210, 210);
    }
    label {
      color: rgb(210, 210, 210);
    }
}
      </style>
    <div class="container">
        <h1 class="text-center">Signup</h1>
        <body>
    <form action="/mpdashboard/signup.php" method="POST">
      <div class="form-group ">
        <label for="Username" class="form-label">Username</label>
        <input type="text" class="form-control" id="Username" name="Username" aria-describedby="emailHelp">
      </div>
      <div class="form-group ">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="Password" name="password">
      </div>
      <div class="form-group ">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <small id="emailHelp" class="form-text">Make sure to type the same password</small>
      </div>
      <button type="submit" class="btn btn-primary ">Signup</button>
    </form>
    </body>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
  </body>
</html>