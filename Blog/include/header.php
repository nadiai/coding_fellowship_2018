<?php

session_start();

$print = printHeader();

 ?>

	<head>

		<title> Nadia's Website</title>
		<link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
	</head>
		<body>
			<div class="mainPageSidenav">
					<a href='Blog/view/paboutme.php'> About Me</a>
					<br>
					<br>
					<a href='Blog/view/myInterests.php'> My Interests</a>
					<br>
					<br>
					<a href='Blog/view/Resume.php'> My Resume</a>
					<br>
					<br>
					<a href='Blog/view/Projects.php'> Summer 2018</a>
					<br>
					<br>
					<!--<a href='Blog/view/blogposts.php'> My Blog </a>-->
			</div>
			<div id="Container">
				<img class="mainPageBackground" src="/images/backdrop2.jpg" alt='Background'/>
				<h1 class='mainPageTitle'> NADIA IRVIN</h1>
				<div class="mainPageContent">
					<img class='picOfNadia' src='/images/IMG_0601.JPG' alt='Nadia'/>
					<?php

					echo "<br/>";

						$posts = GetAllBlogPosts();

						 foreach($posts as $index => $post){
							 //var_dump($posts);
						 echo "
						 <li>
								<p class='blogTitleMainPg' style='text-align: center;'> <a href = '/Blog/view/blogposts.php?blogPostID=$index'>$post[Title]</a></p>
							</li>";
						 }
						 echo "<br/>";

						 echo "
						 	<form action='' method='post'>
								<input type='text' name='firstName' value='".@$_SESSION['firstName']."' placeholder='First Name' class='nameBox'/> <br />
								<input type='text' name='lastName' value='".@$_SESSION['lastName']."' placeholder='Last Name' class='nameBox'/> <br />
								<input type='text' name='e-mail' value='".@$_SESSION['e-mail']."' placeholder='E-mail' class='emailBox'/> <br />
								<input type='text' name='userName' value='".@$_SESSION['userName']."' placeholder='Username' class='userNameBox'/> <br />
								<input type='text' name='password' value='".@$_SESSION['password']."' placeholder='Password' class='passwordBox'/> <br />
								<input type='submit' name='sign-up' value='Sign Up9'>
							</form>
						 ";

					?>

				</div>
			</div>
