<?php
   session_start();
$host = "localhost";
  $user = "id13046665_amiri";
  $pass = "ishimweAmir123@";
  $database = "id13046665_ishimwe";
   $users_first_name = $_COOKIE["user_first_name"];
$users_last_name = $_COOKIE["users_last_name"];

$connection_String = mysqli_connect($host,$user,$pass,$database);

$command_query = "UPDATE `users_online` SET status = 'offline' WHERE first_name = '$users_first_name' AND last_name = '$users_last_name'";

$execute_command_query = mysqli_query($connection_String,$command_query);
   if(session_destroy()) {



      header("Location: ../../index.php");
   }
?>