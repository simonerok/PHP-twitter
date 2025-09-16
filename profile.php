<?php
require_once __DIR__."/x.php";
_noCache();
session_start();
if( ! isset($_SESSION["user"]) ){
    header("Location: login");
    exit();
    /* exit or the code will keep running waste if rescourses */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Profile</h1>
    <div>
        <?php
        echo $_SESSION["user"]["user_pk"];
        ?>
    </div>
    <a href="bridge-logout">Logout</a>
    
</body>
</html>