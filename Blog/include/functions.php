<?php

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
)->fetchAll();

	return $result;

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


function getTagBlogs($tagID){
	$result = dbQuery("
		SELECT *
		FROM post_tag
		WHERE tagID = :tagID
		",
	 array('tagID' => $tagID )
 	);

 	return $result->fetchAll();

}

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
