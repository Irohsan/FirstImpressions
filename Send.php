<?php
    include 'SendQuery.php';

    public class Send implements SendQuery
    {
        public function establishConnection()
        {
            // Validation Credentials
            $Username = "ma2594";
            $Password = "5105780";
            $Server = "tund.cefns.nau.edu";

            // Connection object.
            $conn = mysqli_connect( $Server, $Username, $Password, "ma2594" );

            // Ensure proper connection.
            if( mysqli_connect_errno() )
            {
                die( "Connection failed to establish." . $conn->mysqli_connect_error );
            }

            return $conn;
        }
            
    }

    public class sendRequest( $sql )
    {
        $conn = establishConnection();
        
        $results = $conn->query( $sql );
        $rows = mysqli_fetch_assoc( $results );
        
        return $rows;
    }
?>