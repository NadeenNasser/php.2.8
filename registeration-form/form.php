<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>

<body>

   <h2>Registration Form</h2>
   <h3> Hello </h3>


   <form method="POST" action="logic.php" enctype="multipart/form-data">

       <label>
           <input type="text" name="first_name" placeholder="First Name"><br><br>
           <input type="text" name="last_name" placeholder="last Name" ><br><br>
           <input type="email" name="email" placeholder="Email" ><br><br>
           <input type="password" name="password" placeholder="password"><br><br>
           <input type="password" name="confirm_password" placeholder="confirm password" ><br><br>
           <input type="file"  name="image"> <br><br>
       </label>

       <button type="submit">
           register
       </button> <br><br><br>

   </form>

<?php

if (isset($_SESSION["error_message"])) {
    foreach ($_SESSION["error_message"] as $message) {
        echo "<p style='color:red;'>$message</p>";
    }
} elseif (isset($_SESSION["success_message"])) {
    echo "<p style='color:green'>{$_SESSION["success_message"]}</p>";
}

// unset all varaibles and destory the session
session_unset();
session_destroy();

   ?>


</body>

</html>

