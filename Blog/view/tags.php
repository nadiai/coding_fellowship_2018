<?php

include('Blog/include/functions.php');
printHeader();
 ?>
	<head>
		<title> Sort by Tags </title>

		<link rel='stylesheet' href="/Blog/include/websiteMasterStyle.css">
	</head>
	<body>

		<?php

		$tag = getTag($_REQUEST['tagID']);

		echo "<title class='tagTitle'> $tag[tagName]</title>";

		?>
		<div class="tagTopNav">
				<a href='events.php'> Events</a>
				<a href='food.php'> Food </a>
				<a href='lifeUpdates.php'> Life Updates </a>
				<a id='homeButton' href='/index.php'> Back to Main </a>
		</div>
		<?php
		//
		// }
		// $tags = getAllTags($_REQUEST['tagID']);
		//
		// 	echo "<title class='tagTitle'> $tags[tagName]</title>";

			$listPosts = getTagBlogs($_REQUEST['tagID']);

			 // echo "<title class='tagTitle'> $listPosts[tagName]</title>'";

				foreach($listPosts as $postList){
					echo "
						<h2 class='blogListingUnderTag'> <a href = '/Blog/view/blogposts.php?blogPostID=$postList[blogPostID]'> $postList[blogName]</a></h2>
					";
				}
				// var_dump($listPosts);
				// var_dump($postList);

		 ?>
	</body>
