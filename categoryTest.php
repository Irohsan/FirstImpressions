<?php
    include_once 'test.php';
    include_once 'category.php';

    class CategoryTest
    {   
        private $pass = false;
        
        public function __construct()
        {
            $this->runTests();
        }
        
        function runTests()
        {
           $passed = false;
            
           $passed = $this->getNum();
           $passed = $this->getTopPosts();
           $this->pass = $passed;
        }
        
        function getNum()
        {
            $cat = new Category();
            
            if( $cat->getNumberOfPosts( 6 ) == 2 )
            {
                return true;
            }
        }
        
        function getTopPosts()
        {
            $cat = new Category();
            
            $top = $cat->getTopRatedPosts();
            
            if( $top[0] == 26 )
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
        
        function getBoolPassFail()
        {
            return $this->pass;
        }
    }
?>