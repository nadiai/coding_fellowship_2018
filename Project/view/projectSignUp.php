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

$Errors2 = array();
if(isset($_REQUEST['loginSubmission'])){
	if ($_REQUEST['p_UserName'] == '') {
		$Errors2['p_UserName'] = "required";
	}
	if ($_REQUEST['p_PassWord'] == '') {
		$Errors2['p_PassWord'] = "required";
	}
	if (sizeof($Errors2) == 0) {
		 verifyUser( strtolower(@$_REQUEST['p_UserName']), @$_REQUEST['p_PassWord']);
	} else {
		echo "login Failed";
	}
}

printHeader();
?>

		<title> Login Page </title>
		<link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet'>
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
				$("#title").click(function(){
		    $(".formValues").slideToggle("easing");
				$(".loginFormValues").slideUp("easing");
			});
	});
	$(document).ready(function(){
		$("#loginTitle").click(function(){
		$(".loginFormValues").slideToggle("easing");
		$(".formValues").slideUp("easing");
	});
	});
</script>
		<body class='signUpPage'>
			<section class="navigation">
				<div class="nav-container">
					<nav>
								<a href='projectUserAccounts.php'> Find Users</a>
							 <div class='nav-logo'>
								 <img src='/images/logoImage.png' alt='logo'/>
							</div>

					</nav>
				</div>
			</section>
			<br/>

		<div class='welcomePageContainer'>
	<div class="or-spacer-vertical left"><div class="mask"></div></div>
<?php
			echo "
				<div class='Login-SignUp-Page'>
					<div class='signUp'>
						<form action='' method='post'>
							<p> Click to</p>
							<div id='title'>
									<h1> Sign Up Here </h1>
							</div>
									<div class='formValues'>
										<hr class='style14'>
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
								</form>
						</div>


							<br/>
							<p> or </p>
							<div class='login'>
							<form action='' method='post'>
							<div id='loginTitle'>
								<h1> Login Here </h1>
							</div>
								<div class='loginFormValues'>
									<hr class='style14'>
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


						";
						?>
						<div class="or-spacer-vertical right"><div class="mask"></div></div>
		</div>
<?php

printFooter();

?>
