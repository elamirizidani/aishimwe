<?php
session_start();
?>
<?php
include("conection.php");


$_SESSION["err"] = "";
if (isset($_POST["submit"])) {

    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];


    $username = mysqli_real_escape_string($connection_String, $username);
    $password = mysqli_real_escape_string($connection_String, $password);


    $get_current_user_details = "SELECT * FROM users_table WHERE user_fname = '$username' AND Password = '$password' LIMIT 1";
    $execute_user_details_command = mysqli_query($connection_String, $get_current_user_details);
    $get_additional_info = mysqli_fetch_assoc($execute_user_details_command);

    $users_last_name = $get_additional_info["user_lname"];
    $Users_ID = $get_additional_info["Users_ID"];
    


    $command_query = "SELECT * FROM users_table WHERE user_fname = '$username' AND Password = '$password' AND user_lname = '$users_last_name'";

    $execute_command_query = mysqli_query($connection_String, $command_query);

    $user_validity = mysqli_num_rows($execute_command_query);

    if ($user_validity > 0) {

        $checking_online_status = "SELECT * FROM users_online WHERE first_name='$username' AND last_name = '$users_last_name'";

        $execute_checking_online_status = mysqli_query($connection_String, $checking_online_status);

        $online_status_validity = mysqli_num_rows($execute_checking_online_status);

        if ($online_status_validity > 0) {

            setcookie("user_first_name", $username, time() + (86400 * 30));
            setcookie("users_last_name", $users_last_name, time() + (86400 * 30));
            setcookie("Users_ID", $Users_ID, time() + (86400 * 30));

            setcookie("default_clicked_on_username", "Welcome", time() + (86400 * 30));

            setcookie("clicked_on_user_last_name", $users_last_name, time() + (86400 * 30));

            setcookie("Selected_Username_Table", "dummy_text", time() + (86400 * 30));
            setcookie("Reversed_selected_Username_Table", "dummy_text", time() + (86400 * 30));

            setcookie("selected_Username_Table_uploads", "dummy_text", time() + (86400 * 30));
            setcookie("reversed_selected_Username_Table_uploads", "dummy_text", time() + (86400 *
                30));

            $update_status_command =
                "UPDATE `users_online` SET status = 'online' WHERE first_name ='$username' AND last_name = '$users_last_name'";
            $execute_status_command = mysqli_query($connection_String, $update_status_command);


            header("Location:Dashboard/swaelazer.php");

        } else {

            $insert_command = "INSERT INTO users_online (`ID`, `first_name`,`last_name`, `Time`,`status`) VALUES (NULL, '$username','$users_last_name', CURRENT_TIMESTAMP,'online')";

            $execute_insert_command = mysqli_query($connection_String, $insert_command);

            $UserID = mysqli_insert_id($connection_String);

            mysqli_close($connection_String);

            setcookie("user_first_name", $username, time() + (86400 * 30));
            setcookie("users_last_name", $users_last_name, time() + (86400 * 30));
            setcookie("Users_ID", $Users_ID, time() + (86400 * 30));
            

            setcookie("default_clicked_on_username", "Welcome", time() + (86400 * 30));

            setcookie("clicked_on_user_last_name", $users_last_name, time() + (86400 * 30));

            setcookie("Selected_Username_Table", "dummy_text", time() + (86400 * 30));
            setcookie("Reversed_selected_Username_Table", "dummy_text", time() + (86400 * 30));

            setcookie("selected_Username_Table_uploads", "dummy_text", time() + (86400 * 30));
            setcookie("reversed_selected_Username_Table_uploads", "dummy_text", time() + (86400 *
                30));

            header("Location:Dashboard/swaelazer.php");
        }

    } else {
        $_SESSION["err"] = "Wrong Username or Password";
    }
    ;
} else {

}
;

?>

<!--<!DOCTYPE html>-->
<html >
<head>
  <meta charset="UTF-8">
  <title>Aishimwe</title>
  <link rel="apple-touch-icon" href="favico.png">
  <link rel="stylesheet" href="Login_css/style.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<header>

            <div class="container">
        <div id="branding"><h1><span class="highlight">A</span>ishimwe
        </div>
    </div>
        </header>
<section>


  <form class='login-form' method="post">
  <div class="flex-row">
    <input id="username" class='lf--input' placeholder='Username' type='text' name="txtUsername">
  </div>
  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="txtPassword">
  </div>
  <input class='lf--submit' type='submit' value='LOGIN' name="submit" id="btnSubmit">

	  <p style="font-size:.7em;color:#2dc6bf;text-align:center;cursor:hand"><u><a style="color:#2dc6bf" href="users_signup.php">Sign Up</a></u></p>

</form>

 <label id="lf--errormsg"><?php echo ($_SESSION["err"]); ?></label>
</section>
<script data-ad-client="ca-pub-5784913210268700" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>
</html>
