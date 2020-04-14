
<html>
	<head>
		<!--- <link href="Dashboard/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Dashboard/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="Dashboard/css/style.css" rel="stylesheet" />
    <link href="Dashboard/css/styles.css" rel="stylesheet"/>

    <title>Hommies On The Loose</title>

    <script src="js/lumino.glyphs.js"></script>-->
		<link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="css/Private_Chat_Style.css" rel="stylesheet"/>
    <link href="../css/jquery.yacal.css" rel="stylesheet"/>

    <title>Hommie</title>


  <style type="text/css">

  .user_picture{
    border-radius: 10px;
    margin-top: 20px;
    height: 120px;
    width: 120px;
    box-shadow: 3px 3px 3px;
  }

  #my_profile_holder{
    float:left;
  }

  #details_holder{
    float: right;
    text-align: left;
    margin-top: 25px;
    margin-right: 40px;
  }

  .word-styling{
    font-size: .8em;
  }

  .heading-style{
    color:rgba(69, 162, 255, 0.93);
    font-size: .8em;
  }

  </style>

		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<header>

			<div class="container">
  		<div id="branding"><h1><span class="highlight">S</span>wae<span class="highlight">l</span>azer</h1>
  		</div>
  		<nav>
  			<ul>
  				<li id="list">


  					<div id="top-navigation-username">

<span id="my_profile_picture"></span>

<!-- Working with the dp -->
<div id="dp_form_holder">
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" id="file"/>
  <input type="submit" name="submit_file" id="submit_file"/>
</form>
</div>

<span style="color:white; margin-top:3px"><em>Welcome,&nbsp;</em></span>
<span style="margin-top:3px"><strong><?php echo ($_COOKIE["user_first_name"]); ?></strong></span>
</div>
</div>





  			</ul>
  		</nav>
  	</div>
		</header>

    <section class="menu">
		 <headr class="header">Menu </headr>
		 <ol>
			<li class="menu-item">Topics</li>			
				<ol class="sub-menu">
					<li class="menu-item"><a href="swaelazer.php"><img src="Dashboard/img/home.png" class="" />&nbsp;&nbsp;&nbsp;Home</a></li>
					<li class="menu-item"><a href="Dashboard/Message/Message.php"><img src="Dashboard/img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Messages</a></li>
					<li class="menu-item"><a href=""><img src="Dashboard/img/profile.png" class="" />&nbsp;&nbsp;&nbsp;Profile</a></li>
					<li class="menu-item"><a href=""><img src="Dashboard/img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Chat</a></li>
					<li class="menu-item"><a href=""><img src="Dashboard/img/freind.png" class="" />&nbsp;&nbsp;&nbsp;Freind</a></li>
					<li class="menu-item"><a href=""><img src="Dashboard/img/Logout.png" class="" />&nbsp;&nbsp;&nbsp;Logout</a></li>
				</ol>
			 </li>

			 <li class="menu-item">Follow

			 <ol class="sub-menu">
					<li class="menu-item"><a href=""><img src="./img/Facebook.png" height="20">&nbsp;Facebook</a></li>
					<li class="menu-item"><a href=""><img src="./img/ig.png" height="20">&nbsp;Instagram</a></li>
					<li class="menu-item"><a href="">Youtube</a></li>
					<li class="menu-item"><a href=""><img src="./img/whats.png" height="20">&nbsp;</a></li>
				</ol></li>Authors
					<ol class="sub-menu">
						<?php
			 	include("slide.html");

			 	?>




					<li class="menu-item">I.Amir</li>
				</ol>
				</li>
			 </ol>
			 <section class="ft">
			 	&copy;2019 All rights reserved.
			 </section>
		</section>




<section id="showcase">
        <div class="container">

          <div class="container-fluid" id="main_content">

            <div style="display:none">
            <form method="post" action="" enctype="multipart/form-data">
              <input type="file" name="file" id="my_upload_file"/>
              <input type="submit" name="upload_file" id="upload_file"/>
            </form>
            </div>

<div class="row">

        <div id="Get_Online_Users" class="col-md-2">

       </div>
            <div id="Main_Chat_Box" class="col-md-7">
        <br>
        <div id="get_chatting_user_name">
        <div id="get_name" style="font-weight:bold;font-size:1.5em;float:left;color:rgba(69, 162, 255, 0.93)"></div>
        <div style="float:right"><img src="../img/upload.png" id="btn_upload" style="cursor:hand;margin-right:15px; margin-top:-8px" height=35px width=35px title="Click here to upload file"/></div>
        <br>
        </div>
        <hr>
      <div id="get_chat_logs">

      </div>

      </div>

      
    <div>

    <form method="post" action="Message.php" id="form_send_message">
    <textarea id="text_area" placeholder="Type Something Here" name="txtmessage"></textarea><img src="../img/send.png" alt="Send Image" id="send_button"/>
    <input type="submit" name="send_message" value="" id="btn_Send"/>
  </form>
  </div>
  </div>
      
           </div>
    </section>





  		
  	       
    </section>


    <section id="sidebar">
			
		<aside id="ads">
  			<div><span class="right_side_logo"> Today <hr></span>
          <div class="calendar"></div>
          </div>
  		</aside>
	</section>


   
	<section id="sidebar">
			
		<aside id="sidebar">
  		<div id="Right_side_bar" class="col-md-3">
      </br>
        
        <div><span class="right_side_logo"> Profile </span> <hr></div>
        <div id="get_users_profile">

        </div>
      </div>
    </div>
    </div>
  		</aside>
	</section>



	<section id="Back">
			
		<aside id="Back">
  			<div class="dark"><center>
  			<a href="">Back to top</a>
  		</div>
  		</aside>
	</section>





<?php
include("conection.php");
        $connection_String = mysqli_connect($host,$user,$pass,$database);

        if(isset($_POST["send_message"])){
          if(!empty($_POST["txtmessage"])){
            $messageSender = $_COOKIE["user_first_name"];
            $newmessage = mysqli_real_escape_string($connection_String, $_POST["txtmessage"]);
            $perfect_table = $_COOKIE["correctTable"];
            $query = "INSERT INTO $perfect_table ( Usernames, Messages ) VALUES ('$messageSender','$newmessage')";
            if($run = mysqli_query($connection_String,$query)){
              echo "<embed loop='false' src='Notification.wav' autoplay='true' hidden='true'/>";
            };
          };
        };


        if(isset($_POST["submit_file"])){
        $selected_username = $_COOKIE["user_first_name"];
        $users_last_name = $_COOKIE["users_last_name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"../Profile_Pictures/".$_FILES["file"]["name"]);
        $connection_String = mysqli_connect($host,$user,$pass,$database);
        $myfiles = $_FILES["file"]["name"];
        $update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE user_fname ='$selected_username' AND user_lname ='$users_last_name'";
        $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);
      };


/*
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
        $selected_user_uploads_table = $_COOKIE["correct_Uploads_Table"];
        $insert_query = "INSERT INTO $selected_user_uploads_table (`ID`, `File`, `Type`, `Size`) VALUES (NULL, '$final_file', '$file_type', '$new_size')";
        $execute_insert_query = mysqli_query($connection_String,$insert_query);
      }
    }
    */

  ?>


<script src="../js/jquery-3.1.1.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/jquery.yacal.min.js"></script>



  <script type="text/javascript">
  $(document).ready(function(){

    $.ajax({
      cache:true,
      success:function(status){
  setInterval(function(){
      $("#Get_Online_Users").load("Online_Users.php"); // Add s to the #Get_Online_User to start ajax requests
    },1000);
  }
  });

    setInterval(function(){
      $("#get_chat_logs").load("Chat_Log.php");    // Add x to the #Main_Chat_Bo to start ajax requests
    },1000);

  setInterval(function(){
    $("#get_name").load("user_clicked_on.php");
  },1000);

  setInterval(function(){
    $("#get_users_profile").load("get_users_profile.php");
  },1000);

  $("#send_button").hover(function() {

  $(this).attr("src","../img/send2.png");
      }, function(){

  $(this).attr("src","../img/send.png");
  });

  $("#send_button").click(function(){
    $("#btn_Send").trigger("click");
  });

  $("#btn_Send").click(function(){
    $(this).submit();
  });

  $("#my_profile_picture").load("Get_Profile_Picture.php");

  $(" #my_profile_picture").click(function(){
  $('#file').trigger("click");
  });

  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });

  $("#submit_file").click(function(){
      $(this).submit();
  });

  $("#submit_file").submit(function(){
  $("#my_profile_picture").load("Get_Profile_Picture.php");
  });

  /*
   $(" #btn_upload").click(function(){
    $('#my_upload_file').trigger("click");
    });

    $("#my_upload_file").change(function(){
    $("#upload_file").trigger("click");
    });

    $("#upload_file").click(function(){
        $(this).submit();
    });

    $("#upload_file").submit(function(){

      $("#get_uploads").load("uploaded.php");

    });

    */

    $(".calendar").yacal({
    tpl: {
    weekday: '<strong class="wday wd#weekday#">#weekdayName#<\/strong>'
    } });
});

</script>

<script>
  function Logout(){
  $.get("../Logout/Logout.php");
  }
</script>
	</body>
</html>