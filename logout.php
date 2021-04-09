<?php
session_start();
unset($_SESSION["users"]);
unset($_SESSION["full_name"]);
header("Location:index.php");
?>