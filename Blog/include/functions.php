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

function printHeader(){
		echo "<html>";
};

function getAllTags(){
	$result = dbQuery("
		SELECT *
		FROM Tags
	")->fetchAll();

	return $result;
}


function getTagBlogs($tagID){
	$result = dbQuery("
		SELECT *
		FROM PostTag
		WHERE tagID = :tagID
		",
	 array('tagID' => $tagID )
 	);

 	return $result->fetchAll();
}


?>
