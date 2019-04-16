<?php
    include_once 'test.php';
    include_once 'post.php';

    class PostTest
    {   
        private $pass = false;
        
        public function __construct()
        {
            $this->runTests();
        }
        
        function runTests()
        {
         
            $passed = false;
            
            $passed = $this->initTest();
            $passed = $this->getSetTextTest();
            $passed = $this->getSetTitleTest();
            $passed = $this->getUpDownVotesTest();
            $passed = $this->incrementVotesTest();
            $passed = $this->getChangeCategoryTest();
            $passed = $this->createPostTest();
            $passed = $this->deletePostTest();
            
            $this->pass = $passed;
        }
        
        static function initTest()
        {
            $post = new Post(26);
            $post2 = new Post(33);
            
            if( $post->getUser() == "jrj268" && $post2->getPostID() == null )
            {
                return true;
            }
        }
        
        static function getSetTextTest()
        {
            $post = new Post( 26 );
            
            $post->setText("I love Japan!");
            
            if( $post->getText() == "I love Japan!")
            {
                return true;
            }
            
        }
        
        static function getSetTitleTest()
        {
            $post = new Post( 26 );
            
            $post->setTitle( "I Love Sakura Trees" );
            
            if( $post->getTitle() == "I Love Sakura Trees" )
            {
                return true;
            }
        }
        
        static function getUpDownVotesTest()
        {
            $post = new Post( 26 );
            
            if( $post->getUpvotes() == 5 && $post->getDownvotes == 0 )
            {
                return true;
            }
        }
        
        static function incrementVotesTest()
        {
            $post = new Post( 26 );
            
            $post->incrementUpvotes();
            $post->incrementDownvotes();
            
            if( $post->getUpvotes() == 6 && $post->getDownvotes() == 1 )
            {
                $post->decrementUpvotes();
                $post->decrementDownvotes();
                
                if( $post->getUpvotes() == 5 && $post->getDownvotes() == 0 )
                {
                    return true;
                }
            }
        }
        
        static function getChangeCategoryTest()
        {
            $post = new Post( 26 );
            
            $post->changeCategory( 6 );
            
            if( $post->getCategory() == "Nature" )
            {
                return true;
            }
        }
        
        static function createPostTest()
        {
            $post = new Post(31);
            
            if( $post->getUser() == "turtlemurtle" )
            {
                return true;     
            }
        }
        
        static function deletePostTest()
        {
            $post = new Post( 31 );
            
            $post->deletePost();
            
            $post = new Post( 31 );
            
            if( $post->getPostID() == null )
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