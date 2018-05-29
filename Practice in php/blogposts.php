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

		$Blogpost = array(
			'0' => array(
				'Title' => '<h1>Time for Change <h1>' ,
			 	'Date' => '<h2> May 28th, 2018 <h2>' ,
				'Pic'=> '<img src="/wreckage.jpg" alt=\'Sunflower\' class="pic"',
				'Text'=> 'There comes growing pains with all change, but through that pain you bloom into something more beautiful and stronger than you were before. Im ready to bloom.'),
			'1' => array(
				'Title' => '<h1> Hello Happiness <h1>' ,
			 	'Date' => 'May 29th, 2018' ,
				'Pic'=> 'Headphones',
				'Text'=> 'The only thing more powerful than having your favorite songs at the tip of your fingers, is having them on the tip of your lips.'),
			'2' => array(
			'Title' => 'Sandcastles' ,
			 'Date' => 'May 30th, 2018' ,
			 'Pic'=> 'Sunflower',
			 'Text'=> 'Today, nothing would be more satisfying than sticking my toes in the sand, feeling the warmth of the sun blazing under my feet, and feeling the cool caress of ocean waves.'),
		);
	?>
	</body>
</html>
