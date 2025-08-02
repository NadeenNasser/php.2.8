<?php

$errors=[];
function validate_password($password, $confirm_password)
{
    global $errors;

    $password = trim($password);
    $confirm_password = trim($confirm_password);

    if (empty($password)) {
        $errors[] = "Please enter your password";
    }

    if (strlen($password) < 7) {
        $errors[] = "Password must be at least 7 characters";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

}

function validate_first_name($first_name)
{
    global $errors;

    $firstname = trim($first_name);

    if (empty($firstname)) {
        $errors[] = "Please enter your first name";
    }

    if (strlen($firstname) < 3) {
        $errors[] = "First name must be at least 3 characters";
    }

}

function validate_last_name($last_name)
{
    global $errors;

    $lastname = trim($last_name);

    if (empty($lastname)) {
        $errors[] = "Please enter your last name";
    }

    if (strlen($lastname) < 3) {
        $errors[] = "Last name must be at least 3 characters";
    }

}

function validate_email($email)
{
    global $errors;

    $Email = trim($email);

    if (empty($Email)) {
        $errors[] = "Please enter your email";
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    }

}
