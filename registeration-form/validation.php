<?php
//session_start();

function validate_min_length($value, $fieldname ,$min_length) // checks if length of filed inputs greater than min
{
    return strlen($value) < $min_length? "{$fieldname} must be at least {$min_length}":null;

}

function validate_required($value,$fieldname) //checks if fields are empty
{
    return empty($value)? "please enter your {$fieldname}":null;
}


function validate_data($data, $files)
{
    $minPassLen = 7;  //minimum password length
    $minLen = 3;     // minimum name length
    $errors = []; // array to store errors
    $maxSize = 2 * 1024 * 1024; // 2 MB
    $allowedTypes = ["image/png", "image/jpeg"];
    $fields= ["first_name", "last_name", "email", "password"];

    // password confirmation
//    if (empty($data["confirm_password"])) {
//        $errors[] = "Please confirm your password";
//    } elseif ($data["confirm_password"] !== $data["password"]) {
//        $errors[] = "Passwords do not match";
//    }
//
//    // check if required fields are empty
//    foreach ($fields as $field){
//        if(validate_required($data[$field], $field)){
//            $errors[] = "please enter your {$field} ";
//        }
//    }
//
//    //validate minimum length
//    $errors[] = validate_min_length($data["first_name"], $fields[0], $minLen);
//    $errors[] = validate_min_length($data["last_name"], $fields[1], $minLen);
//    $errors[] = validate_min_length($data["password"], $fields[3], $minPassLen);

    // Image validation
    if ($files["image"]["size"] > $maxSize) {
        $errors[] = "File size must be less than or equal to 2 MB";
    }

    if (!in_array($files["image"]["type"], $allowedTypes)) {
        $errors[] = "Invalid image type";
    }

    return $errors;
}
