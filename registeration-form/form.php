<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>

<body>

   <h2>Registration Form</h2>
   <h3> hello </h3>


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

if (is_array($_SESSION["message"])) {
    foreach ($_SESSION["message"] as $message) {
        echo "<p style='color:red;'>$message</p>";
    }
} else {
    echo "<p style='color:green'>{$_SESSION["message"]}</p>";
}

   ?>


</body>

</html>

