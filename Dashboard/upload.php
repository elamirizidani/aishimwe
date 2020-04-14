<?php
include("conection.php");
  $connection_String = mysqli_connect($host,$user,$pass,$database);
    if(isset($_POST["submit"])){
        $uid = $_COOKIE["Users_ID"];
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"]);
        $connection_String = mysqli_connect($host,$user,$pass,$database);
        $myfiles = $_FILES["fileToUpload"]["name"];
        $update_profile_query = "insert into post(uid,name,detail)
             values('$uid','$myfiles','')";
        $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);
      };

  ?>