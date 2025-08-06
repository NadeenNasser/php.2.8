<?php
session_start();
require_once "validation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validate_first_name($_POST["first_name"]);
    validate_last_name($_POST["last_name"]);
    validate_email($_POST["email"]);
    validate_password($_POST["password"], $_POST["confirm_password"]);

    if (!empty($errors)) {
        // Store errors in session
        $_SESSION["message"] = [];
        foreach ($errors as $error){
            $_SESSION["message"][] = $error;
        }
    } else {
        $_SESSION["message"] = ["Form submitted successfully!"];
    }

    // Now redirect after processing is done
    header("Location: form.php");
    exit;
}
