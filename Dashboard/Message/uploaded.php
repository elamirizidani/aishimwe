<head>

<style type="text/css">

.uploads_style{

  padding: 5px;
  margin-top: 5px;
  background-color: rgb(122, 120, 120);
  font-style: italic;
  font-weight: bold;
}

.uploads_style a{
  text-decoration: none;
  list-style-type: none;
}

</style>

</head>


<?php
include("conection.php");

        $connection_String = mysqli_connect($host,$user,$pass,$database);

if(isset($_POST['upload_file']))
    {
      $selected_username = $_COOKIE["user_first_name"];

      $file = $_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder="uploads/";

        // new file size in KB
       $new_size = $file_size/1024;
       // new file size in KB

       // make file name in lower case
       $new_file_name = strtolower($file);
       // make file name in lower case

       $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
       {
        $perfect_table = $_COOKIE["correctTable"];
        $insert_query = "INSERT INTO $perfect_table (Usernames, Messages,File,Type,Size) VALUES ('$selected_username','', '$final_file', '$file_type', '$new_size')";
        $execute_insert_query = mysqli_query($connection_String,$insert_query);
      }
    }
    


?>