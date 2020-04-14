
<head>
 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js">
    </script>
    <link href="assets/css/font-awesome.css" type="text/css" rel="stylesheet">
   
<style type="text/css">

.sender,.receiver{
	background-color: #d8d4d4;
	width: 70%;
	margin-top: 2px;
	margin-bottom: 2px;

}

.receiver{
	float: left;
	text-align: left;
	margin-left: 15px;
}

.sender{
	float:right;
	text-align: right;
	margin-right: 15px;
}


div[class="shape_receiver"]{
	background-color: white;
	padding: 5px 10px 5px 10px;
	border-radius: 0px 20px 20px 20px;
}

div[class="shape_sender"]{
	background-color: rgba(69, 162, 255, 0.93);
	padding: 0px 10px 5px 10px;
	border-radius: 20px 3px 20px 20px;
}

span[class="original_sender"]{
	color: white;
	display: inline-block;
	text-align: center;
}

span[class="original_receiver"]{
	color: gray;
	display: inline-block;
	text-align: center;
}

</style>
</head>

<?php

$selected_Username_Table = $_COOKIE["Selected_Username_Table"];
$reversed_selected_Username_Table = $_COOKIE["Reversed_selected_Username_Table"];

include("conection.php");

$connection_String = mysqli_connect($host,$user,$pass,$database);
$command_query = "SELECT * FROM information_schema.tables WHERE table_schema = '$database' AND table_name = '$selected_Username_Table' LIMIT 1";
$execute_command_query = mysqli_query($connection_String,$command_query);
$check_table_existence = mysqli_num_rows($execute_command_query);
if($check_table_existence>0){
  $getting_correct_tablename_orinalname = "true";
}else{
  $getting_correct_tablename_orinalname = "false";
}



$command_query = "SELECT * FROM information_schema.tables WHERE table_schema = '$database' AND table_name = '$reversed_selected_Username_Table' LIMIT 1";

$execute_command_query = mysqli_query($connection_String,$command_query);

$check_table_existence = mysqli_num_rows($execute_command_query);

if($check_table_existence>0){

  $getting_correct_tablename_reversedname = "true";

}else{
  $getting_correct_tablename_reversedname = "false";
}


if($getting_correct_tablename_orinalname == "true" && $getting_correct_tablename_reversedname=="false"){
  setcookie("correctTable",$selected_Username_Table,time() + (86400 * 30));
}elseif($getting_correct_tablename_orinalname == "false" && $getting_correct_tablename_reversedname=="true"){
  setcookie("correctTable",$reversed_selected_Username_Table,time() + (86400 * 30));
}else{
  return;
}

$selected_user_table = $_COOKIE["correctTable"];

$chat_log_query = "SELECT * FROM $selected_user_table ORDER BY ID ASC";

$executing_chat_log_query = mysqli_query($connection_String,$chat_log_query);

while($rows = mysqli_fetch_array($executing_chat_log_query))  :
$message=$rows["Messages"];
	if ($message=='') {
		$image=$rows["File"];
		$type=$rows["Type"];
if(($type=='image/jpeg')||($type=='image/png'))
{
		if($rows["Usernames"]==$_COOKIE["user_first_name"]){
	

 	echo "<div class='sender'><span class='original_sender'>

 	
<img src='uploads/$image' style='width:80px;'>

 	</span></div>";
}else{
 	echo "<div class='receiver'><span class='original_receiver'>

<img src='uploads/$image' style='width:80px;'>


 	</span></div>";
}

}else{
			if($rows["Usernames"]==$_COOKIE["user_first_name"]){
	

 	echo "<div class='sender'><span class='original_sender'>

 	<div class='uploads_style' style='padding: 5px;
  margin-top: 5px;
  font-style: italic;
  font-weight: bold;'>"."$image"."</div>


 	</span></div>";
}else{
 	echo "<div class='receiver'><span class='original_receiver'>


<div class='uploads_style'>"."$image"."</div>

 	</span></div>";
}

}

	}
	else {
		
if($rows["Usernames"]==$_COOKIE["user_first_name"]){
	

 	echo "<div class='sender'><span class='original_sender'><div class='shape_sender'>".$rows["Messages"]."</div></span></div>";
}else{
 	echo "<div class='receiver'><span class='original_receiver'><div class='shape_receiver'>".$rows["Messages"]."</div></span></div>";
}
}
endwhile;

?>

  
                    