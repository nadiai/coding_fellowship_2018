<?php
include('Blog/include/functions.php');
$print = printHeader();
 ?>
	<head>
		<title> Food Tag </title>
	</head>
	<body>
		<h1> Blogs about Food </h1>

		<!-- <?php
		$listPosts = getTagBlogs($_REQUEST['tagID']);

		 // echo "<title class='tagTitle'> $listPosts[tagName]</title>'";

			foreach($listPosts as $index => $postList){
				echo "
					<h2 class='blogListingUnderTag'> <a href = '/Blog/view/blogposts.php?blogPostID=$index'> $postList[blogName]</a></h2>
				";
			}
		 ?> -->
	</body>
</html>
