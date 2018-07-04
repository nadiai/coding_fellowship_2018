<?php

include('Project/include/headerPage.php');

$Errors = array();
if(isset($_REQUEST['loginSubmission'])){
	if ($_REQUEST['p_FirstName'] == '') {
		$Errors['p_FirstName'] = "required";
	}
	if ($_REQUEST['p_LastName'] == '') {
		$Errors['p_LastName'] = "required";
	}
	if ($_REQUEST['p_UserEmail'] == '') {
		$Errors['p_UserEmail'] = "required";
	}
	if ($_REQUEST['p_UserName'] == '') {
		$Errors['p_UserName'] = "required";
	}
	if ($_REQUEST['p_PassWord'] == '') {
		$Errors['p_PassWord'] = "required";
	}
	if (sizeof($Errors) == 0) {
		 insertUser( @$_REQUEST['p_FirstName'], @$_REQUEST['p_LastName'], @$_REQUEST['p_UserEmail'],@$_REQUEST['p_UserName'], @$_REQUEST['p_PassWord']);
		 header('Location: /Project/view/projectLogin.php');
		 exit();
	}
}

printHeader();
?>
		<title> Login Page </title>
		<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	</head>
	<body class='signUpPage'>
<?php
			echo "
							<div class='signUp'>
								<form action='' method='post'>
									<div class='loginText'>
											<h1 class='signUpTitle'> Sign Up! </h1>
											<br/>
											<input type='text' placeholder='First name' name='p_FirstName' value='".@$_REQUEST['p_FirstName']."'/>
											<br/>
											<input type='text' placeholder='Last name' name='p_LastName' value='".@$_REQUEST['p_LastName']."'/>
											<br/>
											<input type='email' placeholder='Email' name='p_UserEmail' value='".@$_REQUEST['p_UserEmail']."'/>
											<br/>
											<input type='text' placeholder='Username' name='p_UserName' value='".@$_REQUEST['p_UserName']."'/>
											<br/>
											<input type='password' placeholder='Password' name='p_PassWord' value='".@$_REQUEST['p_PassWord']."'/>
											<br/>
											<input type='submit' name='loginSubmission' value='Login' />
											<br/>
											<p> Already Have and account? <a href='/Project/view/projectLogin.php'> Login Directly </a></p>
									</div>
								</form>
							</div>


						";
printFooter();

?>
