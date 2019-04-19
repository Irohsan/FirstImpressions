<?
    include "utility.php";
    
    $columns = array("comment_text", "post_id", "username");
    $values = array( $_COOKIE["comment_text"], $_COOKIE["post"], $_COOKIE["user"] );

    insertInto( "comment", $columns, $values );
    header('Location:' . "post_view.php");
?>