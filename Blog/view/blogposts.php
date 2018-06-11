<html>
	<head>
		<title> Nadia's Blogposts </title>
		<link rel='stylesheet' href="/Blog/include/websiteMasterStyle.css">
		<?php
		include('Blog/include/functions.php');
		 ?>
	 </head>

	<body>
		<img alt='Background' src="/images/backdrop2.jpg" class="background">
		<h1 class="searchenginepg"> Nadia's Blog Posts </h1>
		<?php

			//$blogPostID = $_REQUEST['blogPostID'];
			 //$Blogpost = GetBlogPost($_REQUEST['blogPostID']);


			 //$allPostComments = getComments($_REQUEST['blogPostID']);

			 $Blogpost = GetBlogPost($_REQUEST['blogPostID']);
			 //var_dump($_REQUEST);
			  echo "
			  	<body style='background-color:#dce5f4'/>
			  	<h1 style='text-align:center; background-color:#a1c1f4;font-size: 50px;color: #fff; margin-top: 0px;'> $Blogpost[Title] </h1>
			  	<h2 style='text-align: center;'> By: $Blogpost[Author]</h2>
			  	<h2 style='text-align: center;'> $Blogpost[Date]</h2>
			  	<img src='$Blogpost[Images]' style='width:50%; height: auto; margin: auto; align: center; margin-left: auto; margin-right: auto; display: block;'>
			  	<p style='font-size: 20px;text-align: center;'> $Blogpost[Text]</p>

			  ";

				echo "<h1 style=' border-top: solid; border-color:#052455; background-color:#a1c1f4; font-size: 30px;color: #fff; margin-top: 0px;'> Comments </h1>";

			$postComments = getComments($_REQUEST['blogPostID']);

			$Comments = getComments($_REQUEST['blogPostID']);

				foreach($Comments as $index => $Comment){
					echo "
					<br/>
					<p> $Comment[userID] : $Comment[commentDateTime]</p>
					<p style='border: 2px solid black;'> $Comment[Comment]</p>
				";}

				// echo "
				// 	<h1> $postComments[commentID] </h1>
				// 	<h2> $postComments[commentDateTime] </h2>
				// 	<p> $postComments[Comment]</p>
				// ";


//var_dump($postComments);
		 ?>
	</body>

</html>

<?php
//$posts = GetAllBlogPosts(); //we want to have all the data associated with this variable
//for each post
/*var_dump($index);*/

/*foreach($posts as $index) {
var_dump($index);
echo "
	<p><a href='/Blog/view/blogpost.php?blogPostID=$index[blogPostID]'> $index[Title] </a></p>
	";
}
/*die("test");*/
//$post = GetBlogPost($_REQUEST['blogPostID']); //post will find the blogpost ID that is requested

/*echo "
	<h1> $post[Title]</h1>
	<br>
	<h2> $post[Date] </h2>
	<br>
	<img src='$post[Image]'/>
	<br>
	<p> $post[Text]</p>

";*/
?>
