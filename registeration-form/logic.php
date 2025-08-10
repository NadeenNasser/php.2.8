<?php
session_start();
require_once "validation.php";

// redirection function
function redirect($url)
{
    header("Location: $url");
};

// input handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $success_message="Form submitted successfully!";

    //validate data and store the returned errors into an array
   $errors= validate_data($_POST, $_FILES);

    //checking for errors
    if (is_null($errors[0]))  // if the first value of the array is null since when there is no errors
    {                         //validation function returns null
        $_SESSION["success_message"] = $success_message;
    }else{
        $_SESSION["error_message"] = $errors;
    }


    // redirecting to view page
    redirect("form.php");
    exit;
}

