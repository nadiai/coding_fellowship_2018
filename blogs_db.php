<html>
	<head>
		<title> Nadia's Blog post</title>
		<link rel='stylesheet' href="blogstyle.css"
	</head>
</html>
<?php

include('config/config.php');
include('include/db_query.php');
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


$Blogpost = GetBlogPost($_REQUEST['blogPostID']);

echo "
	<img src=\"images/backdrop2.jpg\" alt='Background' style='width:100%; height:200px;'>
	<h1 style='text-align:center; background-color:#052455;font-size: 50px;color: #fff;'> $Blogpost[Title] </h1>
	<h2 style='text-align: center;'> $Blogpost[Author]</h2>
	<h2 style='text-align: center;'> $Blogpost[Date]</h2>
	<img> $Blogpost[Image] </img>
	<p style='font-size: 20px;text-align: center;'> $Blogpost[Text]</p>

";




?>
