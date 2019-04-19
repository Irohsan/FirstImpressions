<?php
    include_once 'test.php';
    include_once 'profile.php';

    class ProfileTest
    {   
        private $pass = false;
        
        public function __construct()
        {
            $this->runTests();
        }
        
        function runTests()
        {
           $passed = false;
            
           $passed = $this->getEmailTest();
           $passed = $this->getTypeTest();
           $passed = $this->validatePasswordTest();
           $passed = $this->getDescriptTest();
           $passed = $this->favoriteTest();
           $passed = $this->removefavoriteTest();
           $passed = $this->setEmailTest();
           $passed = $this->setDescriptTest();
           $passed = $this->setTypeTest();
           $passed = $this->selectDeletePostTest();
            
           $this->pass = $passed;
        }
        
        function getEmailTest()
        {
            $profile = new Profile("jrj268");
            
            if( $profile->getEmail() == "jrj268@nau.edu" )
            {
                return true;
            }
        }
        
        function getTypeTest()
        {
            $profile = new Profile("jrj268");
            
            if( $profile->getType() == 3 )
            {
                return true;
            }
        }
        
        function validatePasswordTest()
        {
            $profile = new Profile("jrj268");
            
            return $profile->validatePassword(123);
        }
        
        function getDescriptTest()
        {
            $profile = new Profile("jrj268");
            
            if( $profile->getDescript() == "Sakura trees are the best!" )
            {
                return true;
            }
        }
        
        function favoriteTest()
        {
            $profile = new Profile("jrj268");
            
            $profile->favorite( 6 );
            $favorites = $profile->showFavorited();
            
            if( $favorites[0] == "Nature" )
            {
                return true;
            }
        }
        
        function removeFavoriteTest()
        {
            $profile = new Profile("jrj268");
            
            $profile->unfavorite( 6 );
            
            $favorites = $profile->showFavorited();
            
            if( $favorites[0] != "Nature" )
            {
                return true;
            }
        }
        
        function getPassFail()
        {
            if( $this->pass )
            {
                echo("Test Passed.");
            }
            else
            {
                echo("Test Failed.");
            }
        }
        
        function setEmailTest()
        {
            $profile = new Profile("jrj268");
            
            $profile->setEmail("jrj268@gmail.com");
            
            if( $profile->getEmail() == "jrj268@gmail.com")
            {
                return true;
            }
        }
        
        function setDescriptTest()
        {
            $profile = new Profile("jrj268");
            
            $profile->setDescript("I love Japan!");
            
            if( $profile->getDescript() == "I love Japan!" )
            {
                return true;
            }
        }
        
        function setTypeTest()
        {
            $profile = new Profile("jrj268");
            $profile->setType("Iroh", 3);
            $profile->setType("Iroh", 1);
            
            $profile = new Profile("Iroh");
            
            if( $profile->getType() == 1 )
            {
                return true;
            }
            
        }
        
        function selectDeletePostTest()
        {
            $profile = new Profile("turtlemurtle");
            
            $profile->selectPost( 26 );
            $profile->deletePost();  
            return true;
        }
                
        function getBoolPassFail()
        {
            return $this->pass;
        }

    }
?>