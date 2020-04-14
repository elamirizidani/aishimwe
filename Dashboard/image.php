<?php
include("conection.php");
$uid = $_COOKIE["Users_ID"];
  $connection_String = mysqli_connect($host,$user,$pass,$database);

if ( isset ( $_POST [ "btn" ])) {
$post=$_POST['textarea'];


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







<?php



include("conection.php");

$connection_String = mysqli_connect($host,$user,$pass,$database);
if(isset($_POST['send']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$comment=$_POST['comment'];

$selected_Username_Table = "comment"."_".$id;

$command_query = "SELECT * FROM information_schema.tables WHERE table_schema = '$database' AND table_name = '$selected_Username_Table' LIMIT 1";

$execute_command_query = mysqli_query($connection_String,$command_query);

$check_table_existence = mysqli_num_rows($execute_command_query);

if($check_table_existence>0){

	$query="INSERT INTO $selected_Username_Table (`comment`, `names`) VALUES ('$comment', '$name')";
	$execute_query= mysqli_query($connection_String,$query);

}else{

	$create_table_query = "CREATE TABLE $selected_Username_Table(ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, comment TEXT NOT NULL, Time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, names VARCHAR(50) NOT NULL)";

	$execute_create_table_query = mysqli_query($connection_String,$create_table_query)or die(mysqli_error($connection_String));

	if($execute_create_table_query){

		$query="INSERT INTO $selected_Username_Table (`comment`, `names`) VALUES ('$comment', '$name')";
	$execute_query= mysqli_query($connection_String,$query);
	}
}

}
?>

	<link rel="stylesheet" href="css/style.css">
	<title></title>
	<script src="js/jquery.js"></script>



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
  

  position:relative;
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



<h1> Ishimwe </h1>
      <p class="ttle">Chat with freinds, meet new ones. Make the whole world in your arms
      </p>

<div class="apost" style="cursor: pointer;" ><img src="img/camera.png" class="ing" id="pic">
	<div id="dp_form_holder" id="pic">
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload"/>
  <input type="submit" name="submit" id="submit"/>
</form>
</div>
	<form method="POST" action="">
	<textarea class="text" name="textarea" placeholder="&nbsp;&nbsp;&nbsp;What's on your mind"></textarea>
<button name="btn">POST</button>
</form>
</div>
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



			 	<?php
include("conection.php");

  $connection_String = mysqli_connect($host,$user,$pass,$database);

$sqlimage= "select pid,uid,name,detail,time from post order by pid desc";
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
<script src="style/js/jquery-3.1.1.min.js"></script>
 <script src="style/js/bootstrap.min.js"></script>
 <script src="style/js/jquery.yacal.min.js"></script>
 