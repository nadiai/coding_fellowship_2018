<?php

include('Project/include/headerPage.php');

$Errors = array();
if(isset($_REQUEST['signUpSubmission'])){
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
		 insertUser( @$_REQUEST['p_FirstName'], @$_REQUEST['p_LastName'], @$_REQUEST['p_UserEmail'], strtolower(@$_REQUEST['p_UserName']), @$_REQUEST['p_PassWord']);
		 header('Location: /Project/view/projectLogin.php');
		 exit();
	}
}

$Errors = array();
if(isset($_REQUEST['loginSubmission'])){
	if ($_REQUEST['p_UserName'] == '') {
		$Errors['p_UserName'] = "required";
	}
	if ($_REQUEST['p_PassWord'] == '') {
		$Errors['p_PassWord'] = "required";
	}
	if (sizeof($Errors) == 0) {
		 verifyUser( strtolower(@$_REQUEST['p_UserName']), @$_REQUEST['p_PassWord']);
	} else {
		echo "login Failed";
	}
}

printHeader();
?>

		<title> Login Page </title>
		<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
		<style type="text/css">
		<?php
		 include('Project/include/projectStyle.css');
		 ?>
		</style>
		<script src="/Blog/include/jquery.js"></script>
	</head>

<script type="text/javascript">
	console.log("I'm here");
		$(document).ready(function(){
			$("#signUpTitle").click(function(){
	    $("#formValues").slideToggle("easing");
		});
});
$(document).ready(function(){
	$("#logInTitle").click(function(){
	$("#loginFormValues").slideToggle("easing");
});
});
</script>
		<body class='signUpPage'>
<?php
			echo "
				<div class='Login-SignUp-Page'>
					<div class='signUp'>
						<form action='' method='post'>
							<div id='signUpTitle'>
									<h1> Sign Up! </h1>
							</div>
									<div id='formValues'>
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
										<input type='submit' name='signUpSubmission' value='Sign Up' />
										<br/>
									</div>
							</div>
						</form>


							<br/>
							<div id='login'>
							<form action='' method='post'>
							<div id='logInTitle'>
								<h1> or Login! </h1>
							</div>
								<div id='loginFormValues'>
									<br/>
									<input type='text' placeholder='Username' name='p_UserName' value='".@$_REQUEST['p_UserName']."'/>
									<br/>
									<input type='password' placeholder='Password' name='p_PassWord' value='".@$_REQUEST['p_PassWord']."'/>
									<br/>
									<input type='submit' name='loginSubmission' value='Login' />
								</div>
					</div>
					</form>
					</div>
				</div>


						";

printFooter();

?>
