<?php include_once 'utility.php';
      include_once 'post.php';

    /**
     * Class: Profile Test
     * <p>
     * Tests the various functionalities of the Post Class.
     */
    final class PostTest extends PHPUnit_Framework_TestCase
    {
        public function testcanFetchExistingPost()
        {
            echo("Test Start: canFetchExistingPost()\n");
            
            $post = new Post( 26 );
            assert( $post->getPostID() == 26 );
            echo("\tPost successfully fetched with ID 26.\n");

            $post = new Post( 0 );
            assert( $post->getPostID() == '' );
            echo("\tPost successfully not found non-existent ID 0.\n");

            echo("testCanFetchExistingPost-----Passed\n");
        }

        public function testCanGetText()
        {
            echo("Test Start: canGetText()\n");

            $post = new Post( 26 );
            assert( $post->getText() == "I love Japan!");
            echo("\tPost text for post ID 26 by user jrj268 correctly returned as 'I love Japan!'\n");

            echo("testCanGetText-----Passed\n");
        }

        public function testCanSetText()
        {
            echo("Test Start: canSetText()\n");

            $post = new Post( 26 );
            $post->setText("testText");
            assert($post->getText() == "testText");
            echo("\tPost text for post ID 26 correctly set to 'testText'\n");

            $post->setText("I love Japan!");
            echo("testCanSetText-----Passed\n");
        }

        public function testcanGetTitle()
        {
            echo("Test Start: canGetTitle()\n");
            
            $post = new Post( 26 );
            assert( $post->getTitle() == "I Love Sakura Trees" );
            echo("\tPost title for ID 26 correctly returned as 'I Love Sakura Trees'\n");

            echo("canGetTitle-----Passed\n");
        }

        public function testCanSetTitle()
        {
            echo("Test Start: canSetTitle()\n");

            $post = new Post( 26 );
            $post->setTitle("testTitle");
            assert($post->getTitle() == "testTitle");
            echo("\t Post title for ID 26 correctly set to value 'testTitle'\n");

            $post->setTitle("I Love Sakura Trees");
            echo("canSetTitle-----Passed\n");
        }

        public function testCanGetUpvotes()
        {
            echo("Test Start: canGetUpvotes()\n");

            $post = new Post( 26 );
            assert($post->getUpvotes() == 28 );
            echo("\tUpvotes successfully retrieved for post with ID 28\n");

            echo("testCanGetUpvotes-----Passed\n");
        }

        public function testCanGetDownvotes()
        {
            echo("Test Start: canGetDownvotes()\n");
            $post = new Post( 26 );
            assert($post->getDownvotes() == 25 );
            echo("\tUpvotes successfully retrieved for post with ID 25\n");

            echo("testCanGetDownvotes-----Passed\n");
        }

        public function testIncrementUpvotes()
        {
            echo("Test Start: canIncrementUpvotes()\n");

            $post = new Post( 26 );
            $post->incrementUpvotes();
            assert( $post->getUpvotes() == 29 );
            echo("\tUpvotes succesfully incremented for post with ID 29.\n");

            echo("testCanIncrementUpvotes-----Passed\n");
        }

        public function testIncrementDownvotes()
        {
            echo("Test Start: canIncrementDownvotes()\n");

            $post = new Post( 26 );
            $post->incrementDownvotes();
            assert( $post->getDownvotes() == 26 );
            echo("\tDownvotes succesfully incremented for post with ID 26.\n");

            echo("testCanIncrementDownvotes-----Passed\n");
        }

        public function testCanDecrementUpvotes()
        {
            echo("Test Start: canDecrementUpvotes()\n");

            $post = new Post( 26 );

            $post->decrementUpvotes();
            assert( $post->getUpvotes() == 28 );
            echo("\tUpvotes succesfully incremented for post with ID 28.\n");

            echo("testCanDecrementUpvotes-----Passed\n");
        }

        public function testCanDecrementDownvotes()
        {
            echo("Test Start: canDecrementDownvotes()\n");

            $post = new Post( 26 );
            $post->decrementDownvotes();
            assert( $post->getDownvotes() == 25 );
            echo("\tUpvotes succesfully incremented for post with ID 25.\n");

            echo("testCanDecrementUpvotes-----Passed\n");
        }

        public function testCanGetUser()
        {
            echo("Test Start: canGetUser()\n");

            $post = new Post( 26 );
            assert($post->getUser() == "jrj268");
            echo("\tUser correctly found for post with ID 26.\n");

            echo("testCanGetUser-----Passed\n");
        }

        public function testcanGetCategory()
        {
            echo( "Test Start: canGetCategory()\n");

            $post = new Post( 26 );

            assert( $post->getCategory() == "Travel" );
            echo("\tCorrect category retrieved for post ID 26.\n");

            echo("testCanGetCategory-----Passed\n");
        }
    }
?>