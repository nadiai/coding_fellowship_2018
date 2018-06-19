<?php
$print = printHeader();
 ?>

	<head>

		<title> Nadia's Website</title>
		<link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
	</head>
		<body>
			<div id="Container">
				<a href='index.php' class='mainPageTitle'> NADIA IRVIN</a>
				<div class="mainTopNav">
						<a href='Blog/view/Projects.php'> Summer 2018</a>
						<a href='Blog/view/Resume.php'> My Resume</a>
						<a href='Blog/view/myInterests.php'> My Interests</a>
						<a href='Blog/view/paboutme.php'> About Me</a>
				</div>
				<div class="mainPageContent">
					<div class='mainSectionOne'>
						<img class='picOfNadia' src='/images/IMG_0601.JPG' alt='Nadia'/>
						<div class='portionAboutMe'>
							<h2> About Me </h2>
							<p> I am a junior majoring in Organization and Strategic management, and double minoring in Educational Studies and Jazz Studies. </p>
						</div>
				</div>

						<?php
						echo "
						<h1 class='myBLogHeading'> My Blog </h1>";
						?>
					<div class='blogPage'>
						<div class="tagSideNav">
							<h1 class='tagHeader'> Sort by tags </h1>
							<?php
							$tags = getAllTags();

								foreach ($tags as $index => $tag) {
									echo "
									<div class='tagTable'>
										<table>
											<tr>
												<td>
													<p class='tagsOnMainPg'> <a href = '/Blog/view/tags.php?tagID=$index'> $tag[tagName]</a></p>
												</td>
											</tr>
										</table>
									</div>
									";
								}
							?>
						</div>
						<div class="blogTitles">
							<br/>
							<br/>
						<?php

							$posts = GetAllBlogPosts();
							 foreach($posts as $index => $post){
								 //var_dump($posts);
							 echo "
							 	<li>
									<p class='blogTitleMainPg' style='text-align: center;'> <a href = '/Blog/view/blogposts.php?blogPostID=$index'>$post[Title]</a></p>
								</li>
								";
							 }

						?>
							</div>
					</div>
				</div>
			</div>
			<!-- <div class='Container2'>
				<h1 class='tagHeader'> Sort by tags </h1>
				<?php
				$tags = getAllTags();

					foreach ($tags as $index => $tag) {
						echo "
						<div class='tagTable'>
							<table>
								<tr>
									<td>
										<p class='tagsOnMainPg'> <a href = '/Blog/view/tags.php?tagID=$index'> $tag[tagName]</a></p>
									</td>
								</tr>
							</table>
						</div>
						";
					}
				?>
			</div> -->
