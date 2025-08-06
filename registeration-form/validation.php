<?php

function validation_data($data,$files)
{
    $errors=[]; //array to store errors

    // data errors
    if(empty($data["first_name"]))
    {
        $errors[] = "Please enter your first name";
    }
    if(empty($data["last_name"])){
        $errors[] = "Please enter your last name";
    }
    if(empty($data["email"])){
        $errors[] = "Please enter your email";
    }
    if(empty($data["password"])){
        $errors[] = "Please enter your password";
    }
    if($data["confirm_password"] !== $data["password"]){
        $errors[] = "Passwords do not match";
    }
    if(strlen($data["password"])<7 ){
        $errors[] = "Password must be at least 7 characters long";
    }
    if (strlen($data["first_name"]) < 3) {
        $errors[] = "First name must be at least 3 characters";
    }
    if (strlen($data["last_name"]) < 3) {
        $errors[] = "First name must be at least 3 characters";
    }
    if (empty($data["email"])) {
        $errors[] = "Please enter your email";
    }
    if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    }

    //image errors
    //max size allowed
    $maxSize = 2 * 1024 * 1024;
    if($files["image"]["size"] > $maxSize ){
        $errors[] = "File size must be less than or equal to 2 MB";
    }

    //allowed types
    $allowedTypes = array("image/png", "image/jpeg");
    if(!in_array($data["image"]["tmp_name"], $allowedTypes)){
        $errors[] = "Invalid image type";
    }

    return $errors;
}
