<?php
try{
    require_once __DIR__."/x.php";
    $userEmail =_validateEmail();
    $userPassword =_validatePassword();
    require_once __DIR__."/db.php";
    $sql = "SELECT * FROM users WHERE user_email = :email";
    $stmt =$_db->prepare($sql);
    $stmt->bindValue(':email', $userEmail);
    $stmt->execute();
    $user = $stmt->fetch();
    //echo $user; #impossible to echo 
    //var_dump($user);
    //print_r($user);
    //echo "<div>******</div>";
    //echo json_encode($user);
    #check if user is in the db
    if( ! $user ){
        header("Location: login");
        exit(); 
    }
    if( ! password_verify($userPassword, $user['user_password']) ){
        header("Location: login");
        exit(); 
    }
    unset($user['user_password']); // remove password from array for security reasons
    //var_dump($user);
    session_start();
    /* put data in the session */
    $_SESSION["user"]= $user;
    header("Location: profile");
    exit();
}catch(Exception $e){
    http_response_code( $e->getCode());
    _echo($e->getMessage());
    exit();
}
