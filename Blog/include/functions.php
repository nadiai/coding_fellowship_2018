<?php

include('Blog/config/config.php');
include('Blog/include/db_query.php');
/*include('include/blogstyle.css');*/

function GetAllBlogPosts(){
	$result = dbQuery("
 		SELECT *
		FROM Blogposts
	")->fetchAll();

	return $result;

}

$allBlogPosts = GetAllBlogPosts();

function GetBlogPost($blogPostID){
	$result= dbQuery("
		SELECT *
		FROM Blogposts
		WHERE blogPostID = $blogPostID
	")->fetch();

	return $result;
}

//Comment Retrieval

function getAllComments(){
	$result = dbQuery("
		SELECT *
		FROM Comments
	")-> fetchAll();

	return $result;
}

$allComments = getAllComments();

function getComments($blogPostID){ //colon is a security prevention
	$result = dbQuery("
		SELECT *
		FROM Comments
		WHERE blogPostID = :blogPostID
	",
	array('blogPostID' => $blogPostID)
);

	return $result->fetchAll();

}


//$postComments = getComments($_REQUEST['blogPostID'])

//function getComment(){
	//$result = dbQuery("
	//	SELECT *
		//FROM Commments
		//WHERE commentID = $commentID
	//")-> fetch();

	//return $result;
//}

//$comment = getComment($_REQUEST['commentID']);

/*var_dump($_REQUEST);*/

/*echo "
	$comment[Comment]
";*/


?>
