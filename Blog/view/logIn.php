<?php

session_start();

include('Blog/include/loginFunctions.php');

 ?>

 <html>
 	<head>
		<title> Login Page </title>
		<link rel='stylesheet' href="/Blog/include/websiteMasterStyle.css">
		<link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
	<head>
	<body>
		<h1 class='logInHeader'> Nadia's Blog Login Page </h1>
		<div class="logInForm">
			<h2 class='logInHeader2'> Login here </h2>
				<?php
				//What i really would like to do is have the user insert their email and then that sets the username for the session
					echo "
						<form action='' method='post'>
						<input type='text' name='userName' placeholder='Username' value='".@$_REQUEST['userName']."'>
						<br/>
						<input type='text' name='passWord' placeholder='Password' value='".@$_REQUEST['passWord']."'>
						<br/>
						<input type='submit' name='logInSubmit' value='Log In'>
						<br/>
						<p> Return to the <a href='/index.php'> Home Page </a></p>
					";

					if (isset($_REQUEST['logInSubmit'])) {
						$_SESSION['userName'] = $_REQUEST['userName'];
						header('Location: logInConfirmation.php');
						exit();
					}

				?>
		<div>
		</div>
	</body>
</html>
