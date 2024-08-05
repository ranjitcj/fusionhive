<?php

if(isset($_COOKIE["user_name"])){
    $username = $_COOKIE["user_name"];

    // Expire the cookies
    setcookie("user_name", "", time() - 86400, "/");

    // Redirect to the homepage
    header("Location: /../index.php");
    //exit(); // Ensure script stops executing after redirect
}
?>
