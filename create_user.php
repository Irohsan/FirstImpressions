<!DOCTYPE html>
<html>
<head>
<body>
<?php 
    // Variables for server connection.
     $servername = "10.25.71.26";
     $username = "root";
     $password = "12345";
     $dbname = "firstimpressions";
    
    // Variables for values from $_POST array.
    $Email = $_POST["email"];
    $Username = $_POST["username"];
    $Password = $_POST["password"];
    
    //Connect to server.
     $conn = new mysqli( $servername, $username, $password, $dbname );
    
    //Test connection for errors, if so return error message. 
     if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
        }
    
    // The query to insert the new user. Note the 1 at the end represents its type: Web Member. This is the default.
    $sql = "INSERT INTO profile_tbl (username, password, email, type_id) VALUES ( '$Username', '$Password', '$Email', 1 )";
    
    if( mysqli_query( $conn, $sql ) )
    {
        echo "Records inserted successfully";
    }
    else
    {
        echo "Error.";
    }
    
    //Set variablese
    $Cookie_name = "user";
    $Cookie_value = $Username;
    
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
    <!-- Redirect to profile page. -->
    <meta http-equiv="refresh" content="0; profile-base.php"/>
    
</body>    
</head>
