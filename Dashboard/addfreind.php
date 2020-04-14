<?php
include("conection.php");

$zizou=$_GET['add'];


$Users_ID=$_COOKIE["Users_ID"];





$connection_String = mysqli_connect($host,$user,$pass,$database);

$command_query = "INSERT INTO freind(request_id,receive_id,status) VALUES ('$Users_ID','$zizou','')";

$execute_command_query = mysqli_query($connection_String,$command_query);

if($execute_command_query==true)
{
	include("freind.php");	
}
else {
	echo "wrong";
}

?>
