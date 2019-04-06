<?php  
    include 'utility.php';
    include 'ProfileTemplate.php';

    public class profile extends profiletemplate
    {
        private $user;
        private $table;
        
        public function __construct( $username )
        {
            $this->fetchUser( $username ); 
            $this->table = 'profile';
        }
        
        public function fetchUser( $username )
        {
            if( validateExistence( 'profile', 'username', $username ) == true )
            {
                $this->user = $username;
            }
            else
            {
                $this->user = null;
            }
        }
        
        public function getUser()
        {
            return $this->user;
        }  
        
        public function getEmail()
        {
            $results = queryDatabase( $this->table, 'email', "WHERE username = '$this->user'" );
            
            return $results['email'];
        }
        
        public function setEmail( $email )
        {
            $column = "email";
            $value = $email;
            
            alterTable( $this->table, $column, $value, "WHERE username = '$this->user'" );
        }
        
        public function getDescript()
        {
            $results = queryDatabase( $this->table, 'profile_descript', "WHERE username = '$this->user'");
 
            return $results['profile_descript'];
        }
        
        public function setDescript( $descript )
        {
            $column = "profile_descript";
            $value = $descript;
            
            alterTable( $this->table, $column, $value, "WHERE username = '$this->user'");
        }
        
        public function getType()
        {
            $results = queryDatabase( $this->table, 'typeId', "WHERE username = '$this->user'");
      
            return $results[ 'typeId' ];
        }
        
        public function setType( $otherUser, $typeID )
        {
            echo('You do not have permission to preform this action');
        }
    }
    
?>