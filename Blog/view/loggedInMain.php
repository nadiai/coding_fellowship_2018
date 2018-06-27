<?php
session_start();
 include('Blog/include/functions.php');
?>
<style type="text/css">
<?php
 include('Blog/include/websiteMasterStyle.css');
 ?>
</style>
<html>
	<head>

		<title> Nadia's Website</title>
		<link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
	</head>

			<div id="Container">
				<?php
				echo "
				<p class='logInMessage'> You are Logged in as $_SESSION[userName] </p>
				<img class='mainPageBackground' src='/images/backdrop2.jpg' alt='Background'/>
				<h1 class='mainPageTitle'> NADIA IRVIN</h1>
				<div class='mainPageContent'>
					<img class='picOfNadia' src='/images/IMG_0601.JPG' alt='Nadia'/>
				";
				?>
					<?php

					echo "<br/>";

						$posts = GetAllBlogPosts();

						 foreach($posts as $index => $post){
							 //var_dump($posts);
						 echo "
						 <li>
								<p class='blogTitleMainPg' style='text-align: center;'> <a href = '/Blog/view/loggedInBlogs.php?blogPostID=$index'>$post[Title]</a></p>
							</li>";
						 }
						 echo "<br/>";
					?>
				<!-- <div class='signUpForm'>
					<?php

						 echo "
						 	<form action='' method='post'>
								<h2> Create an Account </h2>
								<input type='text' name='firstName' value='".@$_SESSION['firstName']."' placeholder='First Name' class='nameBox'/> <br />
								<input type='text' name='lastName' value='".@$_SESSION['lastName']."' placeholder='Last Name' class='nameBox'/> <br />
								<input type='text' name='email' value='".@$_SESSION['email']."' placeholder='E-mail' class='emailBox'/> <br />
								<input type='text' name='userName' value='".@$_SESSION['userName']."' placeholder='Username' class='userNameBox'/> <br />
								<input type='text' name='passWord' value='".@$_SESSION['passWord']."' placeholder='Password' class='passwordBox'/> <br />
								<br/>
								<input type='submit' name='signUp' value='Sign Up' class='signUpButton'>
								<br/>
								<p> Already have an account? <a href='Blog/view/logIn.php'> Login</a></p>
							</form>
						 ";

					?>
				</div> -->

				</div>
			</div>
