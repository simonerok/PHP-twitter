<?php
/* handles validations, email and suchs */

/* this function clears the text if a hacker tries to do <script aka sequel injection */
function _echo($text){
    echo htmlspecialchars($text);
}

/* definere en min værdi for email længde */
define("emailMinLength", 6);
define("emailMaxLength", 50);
function _validateEmail(){
    $userEmail = $_POST['userEmail'] ?? null;
    if( strlen($userEmail) < emailMinLength ){
        throw new Exception("Email is too short min ".emailMinLength." characters", 400);
    }
    if( strlen($userEmail) > emailMaxLength ){
        throw new Exception("Email is too long max ".emailMaxLength." characters", 400);
    }
    return $userEmail; 
}

// ################################ 

/* definere en min værdi for password længde */
define("passwordMinLength", 6);
define("passwordMaxLength", 50);
function _validatePassword(){
    $userPassword = trim($_POST['user_password']);
    if( strlen($userPassword) < passwordMinLength ){
        throw new Exception("Password is too short min ".passwordMinLength." characters", 400);
    }
    if( strlen($userPassword) > passwordMaxLength ){
        throw new Exception("Password is too long max ".passwordMaxLength." characters", 400);
    }
    return $userPassword; 
}
// ################################


function _noCache(){
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
//header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
}