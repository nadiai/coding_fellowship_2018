<?php
$Errors = array();
if(isset($_REQUEST['signUp'])){
	if ($_REQUEST['firstName'] == ''){
		$Errors['firstName'] = "required";
		echo "First name Required <br/>";
	}
	if ($_REQUEST['lastName'] == ''){
		$Errors['lastName'] = "required";
		echo "Last name Required <br/>";
	}
	if ($_REQUEST['email'] == ''){
		$Errors['email'] = "required";
		echo "E-mail Required <br/>";
	}
	if ($_REQUEST['userName'] == ''){
		$Errors['userName'] = "required";
		echo "Username Required <br/>";
	}
	if ($_REQUEST['passWord'] == ''){
		$Errors['passWord'] = "required";
		echo "Password Required";
	}
	if (sizeof($Errors) == 0){
	 $_SESSION['userName'] = $_REQUEST['userName'];
	 $_SESSION['firstName'] = $_REQUEST['firstName'];
	 $_SESSION['lastName'] = $_REQUEST['lastName'];
	 $_SESSION['email'] = $_REQUEST['email'];
	 $_SESSION['passWord'] = $_REQUEST['passWord'];
	 header('Location: Blog/view/signUpConfirmation.php');
	 exit();
	}
}
 ?>

<?php

 $print = printHeader();

?>
	<head>

		<title> Nadia's Website</title>
		<link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
	</head>
		<body>
			<!-- <div class="mainPageSidenav">
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
			</div> -->
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

						 $CreateAccount = insertAnAccount( @$_REQUEST['firstName'], @$_REQUEST['lastName'], @$_REQUEST['email'], @$_REQUEST['userName'], @$_REQUEST['passWord']);
					?>
				</div>

				</div>
			</div>
