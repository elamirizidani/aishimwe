<?php
include("conection.php");

    $connection_String = mysqli_connect($host, $user, $pass, $database);
   
   $user_check = $_SESSION['login_user'];


   header("Location: swaelazer.php");

?>