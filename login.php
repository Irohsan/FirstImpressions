<!DOCTYPE html>
<html>
<head>
<body>
<?php
    // Variables for connection
    $servername = "10.25.71.26";
    $username = "root";
    $password = "12345";
    $dbname = "firstimpressions";
    
    // Variables from user.
    $user = (string) $_POST[ 'username' ];
    $pass = $_POST[ 'password' ];
    
    // Connect to server.
    $conn = new mysqli( $servername, $username, $password, $dbname );
    
    // Error if connection fails.
    if($conn->connect_error)
    {
        die("Connection failed: " .$conn->connect_error);
    }
    
    // Query the database to find if the username exists.
    $sql = "SELECT username, password FROM profile_tbl WHERE username = '$user'";
    $result =  $conn->query( $sql ); 
    $value = mysqli_fetch_assoc( $result );
    
    // If the password isn't correct or the username doesn't exist, redirect back to page.
    if( $value["password"] != $pass )
    {
        echo "Authentication Failed.";
        header("Location: error_auth.html", true, 301);
    }
    
    // If it's correct, we create a cookie.
    //Set variablese
    $Cookie_name = "user";
    $Cookie_value = $user;
    
    // Set the cookie.
    setcookie( $Cookie_name, $Cookie_value, time() + ( 86400 * 30 ), "/" ); // 86400 = 1 day.
    
    // Check that the cookie was successfully set.
    if( !isset( $_COOKIE[ $Cookie_name ] ) )
    {
        echo "Cookie " . $Cookie_name . " is not set!"; 
    }

    // Close connection.
    mysqli_close( $conn );  
?>
   <meta http-equiv="refresh" content="0; profile-base.php"/>
     
</body>    
</head>
</html>