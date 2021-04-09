<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>Register Now!</title>
  </head>
<body>

<?php 
       require('header2.php');
       include('connect.php');
       echo "<br>";
       echo "<br>";
       echo "<br>";


       $select = "SELECT * FROM users";

       $products = $con->query($select);
       
    ?>


<div class="wrapper mt-sm-5" style="background-color: #ff9aa2">
    <h4 class="pb-4 border-bottom" style="color: #343a40">Fill out the form</h4>
    <div class="py-2">

        <form method="POST" action="">
        <div class="row py-2 pink">
            <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" value="" name= "First_Name" required> </div>

            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" value="" name= "Last_Name"  required> </div>
        </div>
        <div class="row py-2 pink">
            <div class="col-md-6"> <label for="uname">User Name</label> <input type="text" class="bg-light form-control" value="" name= "User_Name"  required> </div>

            <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email Address</label> <input type="email" class="bg-light form-control" value="" name= "Email" required=""> </div>
        </div>
          <div class="row py-2 pink">
            <div class="col-md-6"> <label for="number">Phone Number</label> <input type="tel" class="bg-light form-control" value="" name= "Cell_Num" required> </div>
            
            <div class="col-md-6 pt-md-0 pt-3"> <label for="password">Password</label> <input type="password" class="bg-light form-control" name= "Password" value="" required> </div>
        </div>
       

        <div class="py-3 pb-4 border-bottom pink"> <button style= "background-color: #343a40;
    color: #ff9aa2;" type="submit" class="btn mr-3" name="add">Sign Up</button></div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b style="color: #343a40">Have an account already?  </b><a href="login.php">Login Here</a></div>
        </div>
    </div>
</div>
</form>
<?php 
                    if (isset($_POST['add'])) {

                        $pass = md5($_POST['Password']);
                        $insert = "INSERT INTO users (First_Name, Last_Name,User_Name,Email,Cell_Num,Password)
                                    values(:First_Name, :Last_Name, :User_Name,:Email,:Cell_Num,:Password)";

                        $preparedInsert = $con->prepare($insert);

                        $preparedInsert->bindParam(':First_Name', $_POST['First_Name']);
                        $preparedInsert->bindParam(':Last_Name', $_POST['Last_Name']);
                        $preparedInsert->bindParam(':User_Name', $_POST['User_Name']);
                        $preparedInsert->bindParam(':Email', $_POST['Email']);
                        $preparedInsert->bindParam(':Cell_Num', $_POST['Cell_Num']);
                        $preparedInsert->bindParam(':Password',$pass);
                     try {

        
                $rows = $preparedInsert->execute();

                     if ( ($rows) > 0) {
                           header("location: login.php");
                        }
                       
                          } catch(Exception $Exception){ 
                            echo "<div style = 'text-align:center; background-color: pink;'> ";
                             echo"Information already used." ;
                             echo" </div>" ;
                          }




                 

                    #else{
  
}
                ?>
</body>
</html>