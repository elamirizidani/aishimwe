<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="./css/style.css">
  <title></title>
  <script src="./js/jquery.js"></script>



<style>
    .apost .text{
    width: 80%;
    border-radius: 10px;
    float: left;
    margin-left: 3%;
    
  }
  .apost .ing{
    width: 6%;
    float: left;
    margin-left: 2px;
  }
  .apost button{
    width: 10%;
    height: 40px;
    border-radius: 10px;
    float: right;
    background:#35424a;
    margin-right:  2px;
  color:#ffffff;
  }
  .like{
    width: 35px
  }

.notification {
 
  color: white;
  text-decoration: none;
  
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification .badge:hover {
  background: blue;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 3px 6px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
.cmmt{
    width: 100%;
    margin-top: 5px;
    max-height: 60px;


  }
  .lk{
    width: 50%;
    float: left;
    justify-content: center;
    overflow: hidden;
    border-bottom: #e8491d 3px solid;
    cursor: pointer;
    
  }
  .cmnt{
    width: 50%;
    float: right;
    justify-content: center;
    border-bottom: #e8491d 3px solid;
    overflow: hidden;
    cursor: pointer;
    
  }
.cmnt .btn,.lk .btn{
      display: flex;
      justify-content: center;
      flex-direction: row;
      flex-wrap: wrap;
      width: 100%;
      height: 60px;
      position: relative;
      top: 0em;
      left: 0em;
      margin-top: -50px;
      background-color: #252525;
      border-radius: 0px;
      color: white;
      transition: 1000ms cubic-bezier(0.98, 0.03, 0.6, 1.5);
    }
    .lk .btn a,.cmnt .btn a{
      transform: scale(1);
      display: flex;
      justify-content: center;
      flex-direction: row;
      flex-wrap: wrap;
      opacity: 1;
      padding: 0;
      margin: auto;
      color: white;
      font-size: 20px;
    }
    .lk:hover .btn,.cmnt:hover .btn{
      transform: translate(-500px);
    }
    .like{
      margin-left: 150px;
      justify-content: center;
    }

@media(max-width: 768px){
  .like{
      margin-left: 50px;
      justify-content: center;
    }

.lk{
    width: 50%;
    float: left;
    justify-content: center;
    overflow: hidden;
    border-bottom: #e8491d 3px solid;
    cursor: pointer;
    
  }
  .cmnt{
    width: 50%;
    float: right;
    justify-content: center;
    border-bottom: #e8491d 3px solid;
    overflow: hidden;
    cursor: pointer;
    
  }


  
  .apost .text{
    margin-left: 3%;
    width: 70%;
    border-radius: 15px;
    float: left;
  }
  .apost .ing{
    width: 10%;
    float: left;
    margin-left: 2px;
  }
  .apost button{
    width: 13%;
    height: 40px;
    border-radius: 10px;
    float: right;
    background:#35424a;
  color:#ffffff;
  margin-right: 2px;
  }
  .photo{
    width: 100%;
    overflow: hidden;
    min-height: 1px;
  }
  .cmmt{
    width: 100%;
    margin-top: 5px;


  }
  .time{
    margin-top: 5px;
    width: 100%;


  }

 }

  
  </style>
</head>
<body>
<?php



include("conection.php");

$connection_String = mysqli_connect($host,$user,$pass,$database);
if(isset($_POST['send']))
{
  $id=$_POST['id'];
  
  $comment=$_POST['comment'];

$selected_post = "comment"."_".$id;



    $query="INSERT INTO comment(`names`, `comment`,`post`) VALUES ('$selected_username','$comment','$selected_post' )";
  $execute_query= mysqli_query($connection_String,$query);
  

}
?>
<?php
include("conection.php");
  $selected_username = $_COOKIE["user_first_name"];
  $users_last_name = $_COOKIE["users_last_name"];
$Users_ID = $_COOKIE["Users_ID"];

  $connection_String = mysqli_connect($host,$user,$pass,$database);

$command_query = "SELECT * FROM users_table WHERE user_fname = '$selected_username' AND user_lname='$users_last_name'";

  $execute_command_query = mysqli_query($connection_String,$command_query);

  while($row = mysqli_fetch_assoc($execute_command_query)){

    if($row["Profile_Picture"]==""){
    	
        echo "<center><img class='my_profile_pic' src='./Profile_Pictures/default.png' title='Click to change profile picture' /></center>";
    }else{
        $picture_holder = $row["Profile_Picture"];
        echo "<center><img class='my_profile_pic' src='./Profile_Pictures/$picture_holder' title='Click to change profile picture'/></center>";
    }
  }

  





  echo"<center>
<h3>";
echo $selected_username; echo "&nbsp;";
echo $users_last_name;


echo"</h3></center>
	

<div class='p' align='center'>Personal information</div> <br>
&nbsp;&nbsp; Phone Number <br>
&nbsp;&nbsp;Date of birth<br>";




  $connection_String = mysqli_connect($host,$user,$pass,$database);

$sqlimage= "select * from users_table join post on users_table.Users_ID=post.uid where users_table.Users_ID=$Users_ID order by pid desc";
$imageresult=mysqli_query($connection_String,$sqlimage);
while($row=mysqli_fetch_array($imageresult))
{
echo "<section class='container'>
        <div class='post'>
      
      ";

  $image=$row['name'];
  $detail=$row['detail'];
  $id=$row['pid'];
  $time=$row['time'];
  $owner=$row['uid'];
  if($image==''){
    $sqlimageowner= "select user_fname,user_lname from users_table where Users_ID='$owner'";
$imageresul=mysqli_query($connection_String,$sqlimageowner);
while($ro=mysqli_fetch_array($imageresul))
{

   echo "&nbsp;<p style='color:blue;'>".$ro['user_fname']."&nbsp;".$ro['user_lname']."</p>";
}
echo "<br>";
echo $detail;
  }
  else
  {

$sqlimageowner= "select user_fname,user_lname from users_table where Users_ID='$owner'";
$imageresul=mysqli_query($connection_String,$sqlimageowner);
while($ro=mysqli_fetch_array($imageresul))
{

   echo "&nbsp;<p style='color:blue;'>".$ro['user_fname']."&nbsp;".$ro['user_lname']."</p>";
}
echo "

  <br>&nbsp;&nbsp;



  <div class='photo'><a href='swaelazer.php?comment&com=".$row['pid']."'><img class='image' src='uploads/$image'  width='650' style='border-radius: 10px;'></a>";
  }
  echo "<br><br></div><div class='time'>
  
";
  echo $time;

  echo "</div><hr><div class='cmmt'>
<span class='lk'>
  &nbsp;&nbsp;&nbsp;

<a href='swaelazer.php?like&like=".$row['pid']."' class='notification'>
  <span><img src='img/like.png' class='like'></span>

  <span class='badge'>";

$selected_post = "like"."_".$id;
$command_query = "select count(*) as total from likes where post='$selected_post'";

$execute_command_query = mysqli_query($connection_String,$command_query);

$check_table_existence = mysqli_num_rows($execute_command_query);

if($check_table_existence>0){



$sel="select count(*) as total from likes where post='$selected_post'";
              $query=mysqli_query($connection_String,$sel);
         while($rec=mysqli_fetch_array($query))
         
             echo $rec['total'];
     }
     else{
      echo 0;
     }


  echo"</span>
</a>


</span>

<span class='cmnt'>

  &nbsp;&nbsp;&nbsp;";
  echo "

<a href='swaelazer.php?comment&com=".$row['pid']."' class='notification'>
  <span><img src='img/comment.png' class='like'></span>

  <span class='badge'>";

$selected_post = "comment"."_".$id;
$command_query = "select count(*) as total from comment where post='$selected_post' ";

$execute_command_query = mysqli_query($connection_String,$command_query);

$check_table_existence = mysqli_num_rows($execute_command_query);

if($check_table_existence>0){



$sel="select count(*) as total from comment where post='$selected_post' ";
              $query=mysqli_query($connection_String,$sel);
         while($rec=mysqli_fetch_array($query))
         
             echo $rec['total'];
     }
     else{
      echo 0;
     }

  echo"</span>
</a>

</div>";
  
  echo "
           </div>
           </section>
    ";

}
?>

	
<script type="text/javascript">
  $("#pic").click(function(){
  $('#fileToUpload').trigger("click");
  });

  $("#fileToUpload").change(function(){
    $("#submit").trigger("click");
  });

  $("#submit").click(function(){
      $(this).submit();
  });

</script>
<script src="./style/js/jquery-3.1.1.min.js"></script>
 <script src="./style/js/bootstrap.min.js"></script>
 <script src="./style/js/jquery.yacal.min.js"></script>
 