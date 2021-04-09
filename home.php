<html lang="en">
  <head>
    <title>Entry Form</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style> 
 <body>
 	<div class="wrapper bg-dark mt-sm-5">
    <form class="form" method="POST" action="">
    <div class="py-2">
    <div class="form-group">

     

     <div class="row py-2" style="text-align: center;">
   
<?php 
require('header.php');
session_start();


if($_SESSION['users']) {
  echo "<div style = 'text-align:center; color: #fff;'> ";
  echo '<h1>Welcome '.$_SESSION['users'].'</h1>';
  #echo '<h4><a href="logout.php">Logout</a></h4>';
echo" </div>" ;
} 

else { 
  header('location:index.php');
}
?>
</div>
</div>
</body>
</html>