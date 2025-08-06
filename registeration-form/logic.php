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
   $errors= validation_data($_POST, $_FILES);

    //checking for errors
    if (!empty($errors)) {
        // Store errors in session
        $_SESSION["message"] = $errors;
    } else {
        $_SESSION["message"] = "Form submitted successfully!";
    }

    // redirecting to view page
    redirect("form.php");
}

