<?php
include("conection.php");
$uid = $_COOKIE["Users_ID"];
  $connection_String = mysqli_connect($host,$user,$pass,$database);

if ( isset ( $_POST [ "btn" ])) {
$pst=$_POST['textarea'];
$post=addslashes($pst);

 $query = "insert into post(uid,name,detail)
             values('$uid','','$post')";
$result =mysqli_query($connection_String,$query);
        if($result) 
        {
            
        }
        else {
echo "Sorry, there was an error uploading your file to database." ;
}


}

?>
