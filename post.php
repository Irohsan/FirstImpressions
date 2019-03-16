<!DOCTYPE html>

<html></html>
<head>
</head>
<body>
<?php
    // Variables for connection
    $servername = "10.25.71.26";
    $username = "root";
    $password = "12345";
    $dbname = "firstimpressions";
    
    //Variables ( the values that the create post form will create )
    $postTitle = $_POST[ "title"] ;
    $postCategory = $_POST[ "category" ];
    $postFile = $_POST[ "fileref" ];
    $postDescript = $_POST[ "descript" ];
    $postDate = (string) date("Y/m/d");
    $user = $_COOKIE["user"];
    
    // Connect to the server. 
    $conn = mysqli_connect( $servername, $username, $password, $dbname );
    
    //Test connection for errors, if so return error message. 
     if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
        }

    // Query the category_id for that category. 
    $sql = "SELECT category_id FROM category WHERE category_name = '$postCategory'";
    $result =  $conn->query( $sql ); 
    $value = mysqli_fetch_assoc( $result );
    $category_id = $value[ "category_id" ]; 
    

    // Insert the information into the server. 
    $sql = "INSERT INTO post(post_title, post_text, post_date, username, category_id )".
           "VALUES ('$postTitle', '$postDescript', '$postDate', '$user', '$category_id');";
    $result =  $conn->query( $sql );      
?>
    <meta http-equiv="refresh" content="5; feed.php">  

</body>
</html>
