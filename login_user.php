<?php
    include "profile.php";
    
    $profile = new Profile($_POST["username"]);
    if( $profile->getUser() != null && $profile->validatePassword($_POST["password"]))
    {
        setCookie("user", $_POST["username"], time() + (86400 * 30), "/");
        echo $_COOKIE["user"];
    }

   header("Location: feed.php");
 
?>