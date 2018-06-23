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
}
//
// function insertAnAccount($firstName, $lastName, $email, $userName, $passWord){
// 	if(isset($_REQUEST['signUp'])){
// 		$result = dbQuery("
// 		INSERT INTO users(firstName, lastName, email, userName, passWord)
// 		VALUES ('$firstName', '$lastName', '$email', '$userName', '$passWord')
// 		")->fetch();
// }

		// $_SESSION['userName'] = $userName;
function findUsers(){
	$result = dbQuery("
		SELECT *
		FROM users
	")->fetchAll();

	return $result;
}

function findUser($userID){
	$result = dbQuery("
		SELECT *
		FROM users
		WHERE userID = $userID
	")->fetchAll();

	return $result;
}
