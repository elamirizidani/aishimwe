
<html>
	<head>
	
    
    <link href="style/css/style.css" rel="stylesheet" />
   
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>ISHIMWE | Home</title>

   
		

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
           <li class="menu-item"><a href="Message/sms.php"><img src="img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Messages</a></li>
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
  			<div class="dark" id="Get_Online_Users"><center>
  			<?php
			 	include("Online_Users.php");

			 	?></center>
  		</div>
     
  		</aside>
	</section>
<section id="sidebar">
      
         <aside id="sidebar">
    
      <center>
<script data-ad-client="ca-pub-5784913210268700" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>       </center>
     
      </aside>
  </section>



<section id="showcase">
        
      
      <section class="post">
        <?php
    
        if(isset($_GET['comment'])) 
        {
          include("post/comment.php");
        }
        elseif(isset($_GET['like'])) 
        {
          include("post/like.php");
        }

        else
        {
          include("image.php");
        }
       
        
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
  $(document).ready(function(){


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
  });

 </script>

<script src="style/js/jquery-3.1.1.min.js"></script>
 <script src="style/js/bootstrap.min.js"></script>
 <script src="style/js/jquery.yacal.min.js"></script>
 


<style>


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>