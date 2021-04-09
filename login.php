
<?php 
session_start();

include("connect.php");


$msg = ""; 
if(isset($_POST['save'])) {

  $sql = "SELECT * FROM `users` WHERE User_Name=:Username and Password=:Password";

  $statement=$con->prepare($sql);

   $pass = md5($_POST['password']);
  $statement->bindParam(":Username",$_POST["username"]);
  $statement->bindParam(":Password", $pass);
  $result = $statement->execute();
  $row = $statement->fetchAll();
  
  if(count($row)>0){
   
     
    $_SESSION['users']= $row[0]["User_Name"];
    $_SESSION['full_name']= $row[0]["First_Name"] .' '. $row[0]["Last_Name"];
    
  }

else{

   echo "<div style = ' background-color: pink; position: absolute; bottom: 0px; text-align:center;'> ";
   echo"Incorrect username or password!" ;
   echo" </div>" ;
}


}

if(isset($_SESSION['users'])) {
        header("Location:home.php");
}



?>

<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    


    <title>Login</title>
  </head>

<body>
  <br>
  <br>
  <br>
<?php
  require('header2.php');
  ?>

<div class="wrapper mt-sm-5" style="background-color: #ff9aa2" >
    <h4 class="pb-4 border-bottom"  style="color:  #343a40">Sign in to your account</h4>
    <div class="py-2">
      
      <form method="POST" action="">
        <!-- User Name -->
        <div class="row py-2 justify-center">
            <div class="col-md-9 pinkl"> <label for="User Name">User Name</label> <input type="text" class="bg-light form-control" name="username" required> </div>
        </div>


        <!-- Password -->
          <div class="row py-2">
            <div class="col-md-9 pinkl"> <label for="password">Password</label> <input type="password" class="bg-light form-control" name="password" required> </div>
        </div>

        <!-- Login Button -->
        <div class="py-3 pb-4 border-bottom pink"> 

 <input style= "background-color: #343a40;
    color: #ff9aa2;"class="btn mr-3"  name="save" type="submit" value="Login"></div>
</form>
        <!-- text and register link -->
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b style="color:  #343a40">Don't have an account? </b><a href="signup.php">Register Here</a></div>
        </div>
    </div>
</div>
</body>
</html>