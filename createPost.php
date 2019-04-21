<?php
		header( 'Location: https://cefns.nau.edu/~rfp29/FirstImpressions/' );
		include_once 'utility.php';
		include_once 'post.php';

		connectToDatabase();

		$newPost = new post();
		$postCat = $newPost->getCategory();
		$user = $newpost->getUser();
		$title = $_POST[ 'title' ];
		$userText = $_POST[ 'textBox' ];
		$postImage = $_Post[ 'image' ];

		$newPost->createPost( $userText, $user, $title, $postCat, $postImage );



?>
