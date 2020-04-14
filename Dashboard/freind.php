 <head>
  <style>
  .my_profile_image{
      border-radius: 50%;
      cursor : hand;
  }

  .users_status_active{
    float: right;
    width: 10px;
    height: 10px;
    background-color: #16da16;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: 13px;
    border: 2px solid rgba(0, 0, 0, 0.26);

  }

  .users_status_not_active{
    float: right;
    width: 10px;
    height: 10px;
    background-color: gray;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: 13px;
    border: 2px solid rgba(0, 0, 0, 0.26);
  }
 @media(max-width: 768px){
  .img{
      
      width: 20px;
  }
 }


  </style>
 </head>

 
<div class='container'>
      
<?php
include("conection.php");

$Users_ID= $_COOKIE["Users_ID"];
$connection_String = mysqli_connect($host,$user,$pass,$database);

$command_query = "SELECT COUNT(*) AS total FROM users_table";

$execute_command_query = mysqli_query($connection_String,$command_query)or die(mysqli_error($connection_String));

$total_Users_Number = mysqli_fetch_assoc($execute_command_query);

echo "</br>";

echo "<span id='chat-logo'><strong>"."People You May Know"."</strong></span></br><hr>";

  $query_1 = "SELECT * FROM users_table WHERE Users_ID NOT IN (SELECT request_id FROM freind WHERE request_id='$Users_ID')";
  $run = mysqli_query($connection_String,$query_1)or die(mysqli_error($connection_String));
  
  while($row = mysqli_fetch_array($run)){
  	$userID=$row["Users_ID"];
    $newusername = $row["user_fname"];
    $userslast_name = $row["user_lname"];

    echo "<div class='add'>";

    echo "<ul>";


    $command_query = "SELECT * FROM users_table WHERE Users_ID NOT IN (SELECT receive_id FROM freind WHERE receive_id='$Users_ID') AND Users_ID='$userID'";

    $execute_command_query = mysqli_query($connection_String,$command_query);

    while($row = mysqli_fetch_assoc($execute_command_query)){

    if($row["Profile_Picture"]==""){

        echo "<li class='users' id='$userID' name='$newusername' alt='$userslast_name'>

        <img class='my_profile_image' src='Profile_Pictures/default.png' height='35' width='35'/>&nbsp;&nbsp;"."<strong>".$newusername."</strong></li></a>

        <a href='addfreind.php? add=".$row['Users_ID']."'><button name='add'>Add Freind</button></a>


        ";
    }else{
        $username_picture= $row["Profile_Picture"];
        echo "<li class='users' id='$userID' name='$newusername' alt='$userslast_name'>

        <img class='my_profile_image' src='Profile_Pictures/$username_picture' height='35' width='35'/>&nbsp;&nbsp;"."<strong>".$newusername."</strong>
        </li></a>
        <a href='addfreind.php? add=".$row['Users_ID']."'><button name='add'>Add Freind</button></a>
        ";
    }
  }
    echo "</ul>";
    echo "</div>";
  }
?>
</section>
           </div>