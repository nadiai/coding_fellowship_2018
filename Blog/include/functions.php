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

@$userID = $_REQUEST['userID'];
@$Comment = $_REQUEST['Comment'];

//var_dump($_REQUEST);

function insertBlogComment($blogPostID, $userID, $commentDateTime, $Comment){
	$result = dbQuery("
	INSERT INTO Comments(blogPostID, userID, commentDateTime, Comment)
	VALUES ('$blogPostID','$userID', '$commentDateTime', '$Comment')
	")->fetch();

	//return $result;
}

function submitComment($userID, $commentDateTime, $Comment){
	if(isset($_REQUEST['submitComment'])){
		echo "
		<br/>
		<p style='margin-right: 25%'> $userID : $commentDateTime </p>
		<p style='border: 2px solid black; display: block; background-color: #fff; margin-right: 50%'> $Comment </p>
	";
	}
}

?>
