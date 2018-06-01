<html>
	<head>
		<title> Nadia's Blogposts </title>
		<link rel='stylesheet' href="blogstyle.css">
		<?php
		include('include/blogfunctions.php') ?>
	</head>
	<body>
		<div>
			<img alt='Background' src="/backdrop2.jpg" class="background">
		</div>
		<h1 class="mainpg"> Nadia's Blog Posts </h1>
		<div class="body">
			<a href="blog1.php"> May 28th, 2018 </a>
			<br>
			<a href="blog2.php"> May 29th, 2018 </a>
			<br>
			<a href="blog3.php"> May 30th, 2018 </a>
		</div>
	</body>
</html>

<?php
$posts = getAllBlogPosts(); //we want to have all the data associated with this variable
//for each post
/*var_dump($index);*/

foreach($posts as $index) {
/*var_dump($index);*/
echo "
	<p><a href='practicePHP/blogpost.php?blogPostID=$index[blogPostID]'> $index[Title] </a></p>
	";
}
/*die("test");*/
$post = getBlogPost($_REQUEST['blogPostID']); //post will find the blogpost ID that is requested

echo "
	<h1> $post[Title]</h1>
	<br>
	<h2> $post[Date] </h2>
	<br>
	<p> $post[Text]</p>

";
 ?>
