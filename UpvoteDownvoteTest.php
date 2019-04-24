<?php

    include_once 'utility.php';
    include_once 'profile.php';
    include_once 'post.php';

    final class UpvoteDownvoteTest extends PHPUnit_Framework_TestCase
    {
        /*****************************************
         * Function: canUpvote
         * <p>
         * Integrates the user and the post systems in order
         * to verify the upvoting system requirement.
         *****************************************/
        public function testCanUpvote()
        {
            echo("Test Start: canUpvote\n");

            //Fetch the post to upvote and the user to upvote.
            $post = new Post(26);
            $profile = new Profile("jrj268");

            // Select the post via the user and get current upvotes.
            $profile->selectPost(26);
            $upvotes = $post->getUpvotes();
            echo("Current Votes: ". $upvotes . "\n");

            // Upvote the post.
            $profile->upvote();

            // Verify the post upvote count has been accurately updated.
            assert( $post->getUpvotes() == ( $upvotes + 1 ) );
            echo("\tUpvotes successfully incremented to " . $post->getUpvotes() . " by user jrj268\n");

            echo("testCanUpvote-----Passed\n");
        }

        public function testCanDownVote()
        {
            echo("Test Start: canDownVote\n");

            // Select the post to downvote.
            $post = new Post(26);

            // Select the profile which will downvote the post.
            $profile = new Profile("jrj268");
            $profile->selectPost(26);

            // Get current downvotes.
            $downvotes = $post->getDownvotes();
            echo("Current Votes: " . $downvotes . "\n");

            // Downvote and ensure downvotes are correctly incremented.
            $profile->downvote();
            assert( $post->getDownvotes() == ( $downvotes + 1 ) );
            echo("\tDownvotes successfully incremented to " . $post->getDownvotes() . " by user jrj268\n");

            echo("testCanDownVotes-----Passed\n");
        }
    }
?>