<?php
$Errors = array();
if(isset($_REQUEST['signUp'])){
	if ($_REQUEST['firstName'] == ''){
		$Errors['firstName'] = "required";
	}
	if ($_REQUEST['lastName'] == ''){
		$Errors['lastName'] = "required";
	}
	if ($_REQUEST['email'] == ''){
		$Errors['email'] = "required";
	}
	if ($_REQUEST['userName'] == ''){
		$Errors['userName'] = "required";
	}
	if ($_REQUEST['passWord'] == ''){
		$Errors['passWord'] = "required";
	}
	if (sizeof($Errors) == 0){
		// $_SESSION['userName'] = $_REQUEST['userName'];
		// $_SESSION['firstName'] = $_REQUEST['firstName'];
		// $_SESSION['lastName'] = $_REQUEST['lastName'];
		// $_SESSION['email'] = $_REQUEST['email'];
		// $_SESSION['passWord'] = $_REQUEST['passWord'];
	 insertAnAccount( @$_REQUEST['firstName'], @$_REQUEST['lastName'], @$_REQUEST['email'], @$_REQUEST['userName'], @$_REQUEST['passWord'],$_REQUEST['userID']);
	 $_SESSION['userID'] = $_REQUEST['userID'];
	 header('Location: Blog/view/signUpConfirmation.php');
	 exit();
	}
}
 ?>

<?php

printHeader();

?>
	<head>

		<title> Nadia's Website</title>
		<link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
	</head>

		<?php
			if (isset($_SESSION['userID'])) {
				echo "<p class='loggedInMessage'> You are logged in as $_SESSION[firstName] <br/>
				<a href='Blog/view/sessionLogOut.php'> Log Out </a></p>";

			}
		 ?>

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

					<img class='picOfNadia' src='/images/IMG_0601.JPG' alt='Nadia'/>



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
      	 foreach($posts as $index => $post){
							 //var_dump($posts);
						 echo "
						 <li>
								<p class='blogTitleMainPg' style='text-align: center;'> <a href = '/Blog/view/blogposts.php?blogPostID=$index'>$post[Title]</a></p>
							</li>";
						 }
						 echo "<br/>";
					?>
				<div class='signUpForm'>
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
          </div>
			</div>
	
