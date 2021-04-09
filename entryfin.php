<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Entry Form</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box

}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 600px

}


label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #ff9aa2;    
    padding-left: 3px
}

.bg-light{
    color: black;
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}


.btn:hover {
    background-color: #343a40;
    color: #ff9aa2;
}

.btn {
    background-color: #ff9aa2;
}


@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}


</style>
<body>

    <?php
       session_start(); 
       require('header.php');
       include('connect.php');
       echo "<br>";
       echo "<br>";
       echo "<br>";


       $select = "SELECT * FROM diary";

       $products = $con->query($select);
       
    ?>



<div class="wrapper bg-dark mt-sm-5">
    <form class="form" method="POST" action="">
    <div class="py-2">
    <div class="form-group">

        <div class="row py-2">
            <div class="col-md-6"><label for="date" >Date:</label> <input class="bg-light form-control" type="date" value="" id="date"></div>
            <div class="col-md-6"><label for="time" >Time:</label> <input class="bg-light form-control" type="time" value="" id="time"></div>
        </div>

         <div class="row py-2">
            <div class="col-md-6 pt-md-0 pt-3"> <label for="text">Title: </label> <input name="Title" type="text" class="bg-light form-control" placeholder="Enter a title"> </div>
        </div>

        <div class="row py-2">
            <textarea name="StoryDiary" placeholder="Write something about your day." class="bg-light form-control" id="entry" rows="10"></textarea>
        </div>

        <div class="py-3 pb-4 border-bottom">
         <button style= "background-color: #ff9aa2; color: #343a40 ;" type="submit" class="btn mr-3" name="add">Save
         </button>
            <button type="reset" class="btn btn-danger border" >reset</button> </div>
    </div>
    </form>
</div>
<?php 
                    if (isset($_POST['add'])) {
                        $insert = "INSERT INTO diary (Title, StoryDiary, User_Name)
                                    values(:Title, :StoryDiary,:User_Name)";

                        $preparedInsert = $con->prepare($insert);

                        $preparedInsert->bindParam(':Title', $_POST['Title']);
                        $preparedInsert->bindParam(':StoryDiary', $_POST['StoryDiary']);
                        $preparedInsert->bindParam(':User_Name',  $_SESSION['users']);
                     

                        $rows = $preparedInsert->execute();

                        if ($rows > 0) {

                            echo "<script>window.location.href='entries.php';</script>";
                    exit;
                        }
                    }
                ?>

</body>
</html>