<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>

<body>

   <h2>Registration Form</h2>

   <form method="POST" action="logic.php">

       <label>
           <input type="text" name="first_name" placeholder="First Name"><br><br>
           <input type="text" name="last_name" placeholder="last Name" ><br><br>
           <input type="email" name="email" placeholder="Email" ><br><br>
           <input type="password" name="password" placeholder="password"><br><br>
           <input type="password" name="confirm_password" placeholder="confirm password" ><br><br>
       </label>

       <button type="submit">
           register
       </button> <br><br><br>

   </form>

<?php
if(isset($_SESSION["message"])){
      foreach ($_SESSION["message"] as $msg) {
          echo "<p>$msg</p>";
      }
    }else {
    echo "message isn't set";
    }
?>

</body>

</html>

