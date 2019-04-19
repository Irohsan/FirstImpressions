 <?php 
    setcookie('user', null, -1, '/');
    echo( $_COOKIE["user"] );
    header('Location: feed.php');
?>