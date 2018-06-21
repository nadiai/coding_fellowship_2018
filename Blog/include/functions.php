<?php

include('Blog/config/config.php');
include('Blog/include/db_query.php');
/*include('include/blogstyle.css');*/

function GetAllBlogPosts(){
	$result = dbQuery("
 		SELECT *
		FROM blogposts
	")->fetchAll();

	return $result;

}


function GetBlogPost($blogPostID){
	$result= dbQuery("
		SELECT *
		FROM blogposts
		WHERE blogPostID = $blogPostID
	")->fetch();

	return $result;
}

//Comment Retrieval

function getAllComments(){
	$result = dbQuery("
		SELECT *
		FROM comments
	")-> fetchAll();

	return $result;
}


function getComments($blogPostID){ //colon is a security prevention
	$result = dbQuery("
		SELECT *
		FROM comments
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
		FROM tags
	")->fetchAll();

	return $result;
}

function getTag($tagID){
	$result = dbQuery("
		SELECT *
		FROM tags
		WHERE tagID = $tagID
	")->fetch();

	return $result;
}


function getTagBlogs($a){
	$result = dbQuery("
		SELECT *
		FROM post_tag
		WHERE tagID = :tagID
		",
	 array('tagID' => $tagID )
 	);

 	return $result->fetchAll();
}


?>
