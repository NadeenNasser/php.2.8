<?php require 'validation.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Regestration Fourm</title>
</head>

<body>

   <h2>Regestration Fourm</h2>

   <form method="POST" action="">
       <input type="text" name="first_name" placeholder="First Name"> <br><br>
       <input type="text" name="last_name" placeholder="last Name" ><br><br>
       <input type="email" name="email" placeholder="Email" ><br><br>
       <input type="password" name="password" placeholder="password"> <br><br>
       <input type="password" name="confirm_password" placeholder="confirm password" ><br><br>
       <button type="submit">
           register
       </button> <br><br>

       </form>

       <?php
       if($_SERVER["REQUEST_METHOD"] == "POST") {
           validate_first_name($_POST["first_name"]);
           validate_last_name($_POST["last_name"]);
           validate_email($_POST["email"]);
           validate_password($_POST["password"], $_POST["confirm_password"]);

           if (!empty($errors)) {
               foreach ($errors as $error) {
                   echo "<p style='color:red;'>$error</p>";
               }
           } else {
               echo "Form submitted successfully!";
           }
       }

       ?>

</body>

</html>

