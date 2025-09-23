<?php

// show the solid heart if someone likes the tweet
session_start();
require_once __DIR__."/x.php";

$userId = $_SESSION["user"]["user_pk"];
$data = json_decode(file_get_contents("php://input"), true);
$tweetId = _validateNumber($data["tweetId"]);


