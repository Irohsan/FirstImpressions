
<?php 
include 'category.php', 'utility.php','post.php';

$category = new category();

$query;
$result;
$index

public First_Page
{

	function getMaxVotedPicture()
	{
		$result = $category.getTopRatedPosts();
		for ($index = 0; $index < count($result); $index++)
		{
			$post = new Post($results[$index]);
			$query += $post.getPhoto();
		}
		return $query;
	}

	function displayTopPosts()
	{
   	 	echo('<h1> getMaxVotedPicture() </h1>');
	}
}
?>

	

        