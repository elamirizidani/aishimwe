
<html>
	<head>
	
    
    <link href="style/css/style.css" rel="stylesheet" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>ISHIMWE | Freind</title>

   
		

		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
      <div class="toggleare">
    <label for="drop">
     <img src="logo.png" style="width: 50px;height: 50px;">
      

    </label> 
  </div>
			<div class="container">
  		<div id="branding"><h1><span class="highlight">A</span>ishimwe</h1>
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
					 <li class="menu-item"><a href="swaelazer.php"><img src="img/home.png" class="" />&nbsp;&nbsp;&nbsp;Home</a></li>
					 <li class="menu-item"><a href="Message/Message.php"><img src="img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Messages</a></li>
					 <li class="menu-item"><a href="profile.php"><img src="img/profile.png" class="" />&nbsp;&nbsp;&nbsp;Profile</a></li>
					 <li class="menu-item"><a href="freinds.php"><img src="img/freind.png" class="" />&nbsp;&nbsp;&nbsp;Freind</a></li>
					 <li class="menu-item"><a href="Logout/Logout.php"><img src="img/Logout.png" class="" />&nbsp;&nbsp;&nbsp;Logout</a></li>
				 </ol>
			 

				 </li>
			   </ol>
			   <section class="ft">
			  	&copy;2019 All rights reserved.
		  	 </section>
		</section>



  	  	 


<input type="checkbox" id="drop">

    <div class="menuu">
      
        
        <ol class="sub-menu">
          <li class="menu-item">Topics</li>     
        <ol class="sub-menu">
          <li class="menu-item"><a href="swaelazer.php"><img src="img/home.png" class="" />&nbsp;&nbsp;&nbsp;Home</a></li>
           <li class="menu-item"><a href="Message/Message.php"><img src="img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Messages</a></li>
           <li class="menu-item"><a href="profile.php"><img src="img/profile.png" class="" />&nbsp;&nbsp;&nbsp;Profile</a></li>
           <li class="menu-item"><a href="freinds.php"><img src="img/freind.png" class="" />&nbsp;&nbsp;&nbsp;Freind</a></li>
           <li class="menu-item"><a href="Logout/Logout.php"><img src="img/Logout.png" class="" />&nbsp;&nbsp;&nbsp;Logout</a></li>
          
        </ol>

       <ol class="sub-menu">
       </li>


       <section class="ft" style="text-align: center;">
        &copy;2019 All rights reserved.
        
        I.Amiri
       </section>
      
    </div>
   

   
	        <section id="sidebar">
			
		     <aside id="sidebar">
  			<div class="dark"><center>
  			<?php
			 	include("Online_Users.php");

			 	?>
  		</div>
  		</aside>
	</section>




<section id="showcase">
        
      
      <section class="post">
        <?php
        include("freind.php");

        ?>
       </section>


	




<?php

    if(isset($_POST["submit_file"])){
        $selected_username = $_COOKIE["user_first_name"];
        $users_last_name = $_COOKIE["users_last_name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"Profile_Pictures/".$_FILES["file"]["name"]);
        $connection_String = mysqli_connect($host,$user,$pass,$database);
        $myfiles = $_FILES["file"]["name"];
        $update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE user_fname ='$selected_username' AND user_lname ='$users_last_name'";
        $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);
      };

  ?>






 <script type="text/javascript">
  function Logout(){
    $.get("Logout/Logout.php");
}
 </script>

 <script type="text/javascript">
  setInterval(function(){
      $("#get_chat_logs").load("Chat_Log.php");    // Add x to the #Main_Chat_Bo to start ajax requests
    },1000);

  setInterval(function(){
    $("#get_name").load("user_clicked_on.php");
  },1000);

  setInterval(function(){
    $("#get_users_profile").load("get_users_profile.php");
  },1000);

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
 </script>



	</body>
  </html>

    
