
<html>
  <head>

    
   
    <link href="../style/css/style.css" rel="stylesheet" />
   <link href="css/Private_Chat_Style.css" rel="stylesheet"/>
    <link href="../style/css/jquery.yacal.css" rel="stylesheet"/>
     <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">

    <title>ISHIMWE | Message</title>


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
  #Main_Chat_Box,#Get_Online_Users{
  	height: 86%;
  	margin-bottom:0px;
  }
@media(max-width: 768px){
  .col-md-2{
      
      display: none;
  }
  #Main_Chat_Box{
  	height: 87%;
  	margin-bottom:0px;
    
  }
  #get_chat_logs{
  	height: 80%;
  	margin-bottom:0px;
  }
  #Get_Online_Users{
    display: block;
    width: 100%;
  }
  body{
  	width: 100%;
  	margin: 0px 0px 0px 0px;
  }
 }


  </style>

    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header>
<div class="toggleare">
    <label for="drop">
      <img src="../logo.png" style="width: 50px;height: 50px;">
      

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

<span style="color:white; margin-top:3px"><em>&nbsp;</em></span>
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
          <li class="menu-item"><a href="../swaelazer.php"><img src="../img/home.png" class="" />&nbsp;&nbsp;&nbsp;Home</a></li>
          <li class="menu-item"><a href="../Message/Message.php"><img src="../img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Messages</a></li>
          <li class="menu-item"><a href="../profile.php"><img src="../img/profile.png" class="" />&nbsp;&nbsp;&nbsp;Profile</a></li>
          
          <li class="menu-item"><a href="../freinds.php"><img src="../img/freind.png" class="" />&nbsp;&nbsp;&nbsp;Freind</a></li>
          <li class="menu-item" onclick="Logout()"><a href="../Logout/logout.php"><img src="../img/Logout.png" class="" />&nbsp;&nbsp;&nbsp;Logout</a></li>
        </ol>
       </li>

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
          <li class="menu-item"><a href="../swaelazer.php"><img src="../img/home.png" class="" />&nbsp;&nbsp;&nbsp;Home</a></li>
          <li class="menu-item"><a href="../Message/sms.php"><img src="../img/chat-1.png" class="" />&nbsp;&nbsp;&nbsp;Messages</a></li>
          <li class="menu-item"><a href="../profile.php"><img src="../img/profile.png" class="" />&nbsp;&nbsp;&nbsp;Profile</a></li>
          
          <li class="menu-item"><a href="../freinds.php"><img src="../img/freind.png" class="" />&nbsp;&nbsp;&nbsp;Freind</a></li>
          <li class="menu-item" onclick="Logout()"><a href="../Logout/logout.php"><img src="../img/Logout.png" class="" />&nbsp;&nbsp;&nbsp;Logout</a></li>
          
        </ol>

       <ol class="sub-menu">
       </li>


       <section class="ft" style="text-align: center;">
        &copy;2019 All rights reserved.
        
        I.Amiri
       </section>
      
    </div>



<section id="showcase">
        <div class="containere">

          <div >

            <div style="display:none">
            <form method="post" action="" enctype="multipart/form-data">
              <input type="file" name="file" id="my_upload_file"/>
              <input type="submit" name="upload_file" id="upload_file"/>
            </form>
            </div>

<div class="row">

        <div id="Get_Online_Users" class="col-md-2">
  </div>
       <link href="../style/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                  <script src="../style/js/jquery.magnific-popup.js" type="text/javascript"></script>
       <div id="small-dialog2" class="mfp-hide">
                    
                    
            <div id="Main_Chat_Box" class="col-md-7">
        
        
      
      	<div id="get_chat_logs">

      </div>

            <hr>
             <div id="get_chatting_user_name">
             	<div class="type_msg">
                        <div class="input_msg_write">
                            <form method="post" action=""><br>
                            <input type="text" id="text_area" class="write_msg" style="margin-left:5px;width: 80%;background-color: white;" placeholder="Type a message" name="txtmessage" />
                            <button name="send_message" id="btn_Send" class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </form>
                        </div>
                    </div>
        <div style="float:right"><img src="../img/upload.png" id="btn_upload" style="cursor:hand;margin-right:15px; margin-top:-35px;" height=35px width=35px title="Click here to upload file"/></div>
        <br>
        </div>
        	
      </div>
</div>
 
    </div>
      
           </div>
       </div>
    </section>

    

  <section id="sidebar">
      
    <aside id="sidebar">
      <div><span class="right_side_logo"> Profile </span> <hr></div>
        <div id="get_users_profile">
      </aside>
  </section>

  <section id="sidebar">
      
    <aside id="sideba">
      
          
    <div><span class="right_side_logo"> Today <hr></span>
          <div class="calendar"></div>
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

<script src="../style/js/jquery-3.1.1.min.js"></script>
 <script src="../style/js/bootstrap.min.js"></script>
 <script src="../style/js/jquery.yacal.min.js"></script>



  <script type="text/javascript">
  $(document).ready(function(){

    $.ajax({
      cache:true,
      success:function(status){
  setInterval(function(){
      $("#Get_Online_Users").load("http://iamiri.000webhostapp.com/Dashboard/Message/Online_Users.php"); // Add s to the #Get_Online_User to start ajax requests
    },1000);
  }
  });

    setInterval(function(){
      $("#get_chat_logs").load("http://iamiri.000webhostapp.com/Dashboard/Message/Chat_Log.php");    // Add x to the #Main_Chat_Bo to start ajax requests
    },1000);

  setInterval(function(){
    $("#get_name").load("http://iamiri.000webhostapp.com/Dashboard/Message/user_clicked_on.php");
  },1000);

  setInterval(function(){
    $("#get_users_profile").load("http://iamiri.000webhostapp.com/Dashboard/Message/get_users_profile.php");
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

  
   $(" #btn_upload").click(function(){
    $('#my_upload_file').trigger("click");
    });

    $("#my_upload_file").change(function(){
    $("#upload_file").trigger("click");
    });

    $("#upload_file").click(function(){
        $(this).submit();
    });

    

   


    $(".calendar").yacal({
    tpl: {
    weekday: '<strong class="wday wd#weekday#">#weekdayName#<\/strong>'
    } });
});


  function Logout(){
  $.get("../Logout/Logout.php");
  }
</script>
  </body>
</html>
   <script src="../style/js/bootstrap.min.js"></script>