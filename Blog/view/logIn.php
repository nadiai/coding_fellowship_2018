<?php

//include('Blog/include/functions.php');
include('Blog/include/includeAll.php');
					$Errors = array();

					if (isset($_REQUEST['logInSubmit'])) {
						if ($_REQUEST['userName'] == ''){
							$Errors['userName'] = "required";
							echo "Username Required <br/>";
						}
						if ($_REQUEST['passWord'] == ''){
							$Errors['passWord'] = "required";
							echo "Password Required <br/>";
						}
						if (sizeof($Errors) == 0){
							verifyUser($_REQUEST['userName'], $_REQUEST['passWord']);
						}
					}


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
					// $findUser = getDistinctUser(9);
					// echo "$findUser[lastName]";
					// var_dump($findUser);
				?>
		<div>
		</div>
	</body>
</html>
