<html>
	<head>
		<title> Nadia's Blogposts </title>
		<link rel='stylesheet' href="bloggstyle.css">
	</head>
	<body>
		<div>
			<img alt='Background' src="/backdrop2.jpg" class="background">
		</div>
		<h1> Nadia's Blog Posts </h1>
		<div class="body">
			<a href="blog1.php"> May 28th, 2018 </a>
			<br>
			<a href="blog2.php"> May 29th, 2018 </a>
			<br>
			<a href="blog3.php"> May 30th, 2018 </a>
		</div>
	<?php
function getAllBlogPosts(){
	return array(
			'0' => array(
				'Title' => '<h1>Time for Change </h1>' ,
			 	'Date' => '<h2> May 28th, 2018 </h2>' ,
				'Pic'=> '<img src="/wreckage.jpg" alt=\'Sunflower\' class="pic">',
				'Text'=> '<p> There comes growing pains with all change, but through that pain you bloom into something more beautiful and stronger than you were before. Im ready to bloom.</p>'
			),
			'1' => array(
				'Title' => '<h1> Hello Happiness </h1>' ,
			 	'Date' => '<h2> May 29th, 2018</h2>' ,
				'Pic'=> '<img src="/music.jpg" alt=\'Headphones\'class="pic">',
				'Text'=> '<p> The only thing more powerful than having your favorite songs at the tip of your fingers, is having them on the tip of your lips.</p>'
			),
			'2' => array(
			'Title' => '<h1> Sandcastles </h1>' ,
			 'Date' => '<h2> May 30th, 2018 </h2>' ,
			 'Pic'=> '<img src="/beaches.jpg" alt="beach" class="pic">',
			 'Text'=> '<p> Today, nothing would be more satisfying than sticking my toes in the sand, feeling the warmth of the sun blazing under my feet, and feeling the cool caress of ocean waves. </p>'
		 ),
	);
}
// I want to create the function getBlogPost and when this function is called I expect $blogPostID
function getBlogPost($blogPostID){
	$getBlogPosts = getAllBlogPosts(); //after the equal sign means you've called the function
	return $getBlogPosts[$blogPostID]; //from getAllBlogPosts we are going to return a blogpost where the ID = ''
}

$posts = getAllBlogPosts(); //we want to have all the data associated with this variable
//for each post
foreach ($posts as $index) {
	echo"
		<p><a href='blogpost.php?blogPostID=$index[blogPostID]'> $index[Title] </a></p>
		";
}
	?>
	</body>
</html>
