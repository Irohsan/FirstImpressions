<?php 
    include 'profile.php';

    $prof = new profile();
    if( $_POST['username'] != null and $_POST['password'] != null )
    {
        $prof->createProfile( $_POST['username'], $_POST['password'], $_POST['email'], 1 );
        setCookie("user", $_POST["username"] );
        
        $columns = array("trophy_id", "username", "trophy_name");
        $values = array( 1, $_POST["username"], "Make an Account");

        insertInto("earns", $columns, $values );
    }
    header("Location: feed.php");
    exit();
?>