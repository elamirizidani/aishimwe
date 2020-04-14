<head>
 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js">
    </script>
    <link href="assets/css/font-awesome.css" type="text/css" rel="stylesheet">
   
<style type="text/css">
</style></head>
<div class="">
        <div class="messaging">
            <div class="inbox_msg">
                
                <div class="mesgs">
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



echo "<div class='incoming_msg'>
                            <div class='incoming_msg_img'> <img src='uploads/$image' alt='sunil'> 
                            </div>
                            
                        </div>";
}
else{
    echo " <div class='outgoing_msg' style='margin-right: 6px'>
                            <div class='incoming_msg_img'> <img src='uploads/$image' alt='sunil'> 
                            </div>
                        </div>";
}
}else{
            if($rows["Usernames"]==$_COOKIE["user_first_name"]){
    

    echo "<div class='outgoing_msg'>


<div class='uploads_style'>"."$image"."</div>

    </div>";
}else{
    echo "
    <div class='incoming_msg'>

    <div class='uploads_style' style='padding: 5px;
  margin-top: 5px;
  font-style: italic;
  font-weight: bold;'>"."$image"."</div>


   </div>";
}

}
     }
    else {
        
if($rows["Usernames"]==$_COOKIE["user_first_name"]){
    

    echo "<div class='outgoing_msg'>
                            <div class='sent_msg'>
                                <p>".$rows["Messages"]."</p>
                                <span class='time_date'> datte</span> </div>
                        </div>";
}else{
    echo "   <div class='incoming_msg'>
                            <div class='received_msg'>
                                <div class='received_withd_msg'>
                                    <p>".$rows["Messages"]."</p>
                                    <span class='time_date'> date</span></div>
                            </div>
                        </div>";
}
}
endwhile;

?>


                </div>
            </div>

        </div>
    </div>








   
                    




  