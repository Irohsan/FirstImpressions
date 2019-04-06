<?php
    include 'DatabaseCommunicator.php';

    public class InsertInto extends DatabaseCommunicator
    {
        public function createQuery()
        {
            $index = 0;
            $sql = "INSERT INTO $table ( ";

            if( sizeof( $columns ) != sizeof( $values ) )
            {
                echo("Error: insertInto argument for columns and values must have the same length.\n");
                return null;
            }


            for( $index = 0; $index < sizeof( $columns ); $index++ )
            {
                if( $index == ( sizeof( $columns ) - 1 ) )
                {
                    $sql.= $columns[ $index ] . " )";
                }
                else
                {
                    $sql.= $columns[ $index ] . ", ";
                }

            }


            $sql .= " VALUES ( ";

            for( $index = 0; $index < sizeof( $values ); $index++ )
            {
                if( $index == ( sizeof( $values ) - 1 ) )
                {
                    $sql.= "'" . $values[ $index ] . "' );";
                }
                else
                {
                    $sql.= "'" . $values[ $index ] . "', ";
                }

            }

            return $sql;
        }
    }
?>