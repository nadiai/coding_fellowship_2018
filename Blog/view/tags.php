<?php
include('Blog/include/functions.php');
$print = printHeader();
 ?>
	<head>
		<!-- <title> Sort by Tags </title> -->
		<link rel='stylesheet' href="/Blog/include/websiteMasterStyle.css">
	</head>
	<body>
		<?php
			$listPosts = getTagBlogs($_REQUEST['tagID']);
				foreach($listPosts as $index => $postList){
					echo "
						<title> $postList[tagName]</title>
						<h2> <a href = '/Blog/view/blogposts.php?blogPostID=$index'> $postList[blogName]</a></h2>
					";
				}
		 ?>
	</body>
