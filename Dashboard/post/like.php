<?php



include("conection.php");
$selected_username = $_COOKIE["user_first_name"];
  $users_last_name = $_COOKIE["users_last_name"];
$Users_ID = $_COOKIE["Users_ID"];
$connection_String = mysqli_connect($host,$user,$pass,$database);

$zizu=$_GET['like'];
$selected_post = "like"."_".$zizu;

$ckquery="select * from likes where names='$Users_ID' and post='$selected_post'";
$execute_command_query = mysqli_query($connection_String,$ckquery);

$check_table_existence = mysqli_num_rows($execute_command_query);

if($check_table_existence > 0)
{
	$query="delete from likes where names='$Users_ID' and post='$selected_post'";
	$execute_query= mysqli_query($connection_String,$query);
	include("image.php");
}
else {
	$query="INSERT INTO likes(names,post) VALUES ('$Users_ID','$selected_post')";
	$execute_query= mysqli_query($connection_String,$query);
	include("image.php");
}
?>
