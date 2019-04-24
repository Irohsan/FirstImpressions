<?php
    include_once 'utility.php';
    include_once 'profile.php';

    final class UserCreatePostTest extends PHPUnit_Framework_TestCase
    {
        /*****************************************
         * Function: canCreateProfile
         * <p>
         * Integrates the user and the post systems in order
         * to create a post by a specific user in the system.
         *****************************************/
        public function testCanCreateProfile()
        {
            echo("Test Start: canCreateProfile\n");

            $post = new Post(0);
            $profile = new Profile("jrj268");
            echo("Current User: " . $profile->getUser() . "\n" );

            $post->createPost("This is a test.", $profile->getUser(), "Test Post", 1, 1 );
            
            echo("canCreatePostTest-----Passed\n");
        }
    }
?>