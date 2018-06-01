<?php

include('config/config.php');
include('include/db_query.php');

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


$Blogpost = GetBlogPost($_REQUEST['blogPostID']);

echo "
	<h1> $Blogpost[Title] </h1>
	<h2> $Blogpost[Author]</h2>
	<h2> $Blogpost[Date]</h2>
	<p> $Blogpost[Text]</p>

";




?>
