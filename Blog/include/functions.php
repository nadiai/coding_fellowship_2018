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
)->fetchAll();

	return $result;

}

function printHeader(){
		echo "<html>";
};

//var_dump($_REQUEST);

function insertBlogComment($blogPostID, $userName, $commentTimeStamp, $Comment){
		$result = dbQuery("
		INSERT INTO Comments(blogPostID, userName, commentTimeStamp, Comment)
		VALUES ('$blogPostID','$userName', '$commentTimeStamp', '$Comment')
		")->fetch();
}

function echoComment($userName, $commentTimeStamp, $Comment){
			echo "
			<br/>
			<p style='margin-right: 25%'> $userID : $commentTimeStamp</p>
			<p style='border: 2px solid black; display: block; background-color: #fff; margin-right: 50%'> $Comment </p>
		";
}

?>
