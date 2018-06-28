<?php

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

function insertAnAccount($firstName, $lastName, $email, $userName, $passWord){
		$result = dbQuery("
		INSERT INTO users(firstName, lastName, email, userName, passWord)
		VALUES (:firstName, :lastName, :email, :userName, :passWord)",
		array('firstName' => $firstName,
			'lastName' => $lastName,
			'email' => $email,
			'userName' => $userName,
			'passWord' => $passWord
		)
		)->fetch();
}
