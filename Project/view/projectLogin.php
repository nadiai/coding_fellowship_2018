<?php

include('Project/include/headerPage.php');

$Errors = array();
if(isset($_REQUEST['loginSubmission'])){
	if ($_REQUEST['p_UserName'] == '') {
		$Errors['p_UserName'] = "required";
	}
	if ($_REQUEST['p_PassWord'] == '') {
		$Errors['p_PassWord'] = "required";
	}
	if (sizeof($Errors) == 0) {
		 verifyUser( @$_REQUEST['p_UserName'], @$_REQUEST['p_PassWord']);
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
	</head>
	<body class='loginPage'>
<?php
			echo "
							<div class='login'>
							<form action='' method='post'>
							<div class='loginText'>
									<p class='loginTitle'> Login Here! </p>
									<br/>
									<input type='text' placeholder='Username' name='p_UserName' value='".@$_REQUEST['p_UserName']."'/>
									<br/>
									<input type='password' placeholder='Password' name='p_PassWord' value='".@$_REQUEST['p_PassWord']."'/>
									<br/>
									<input type='submit' name='loginSubmission' value='Login' />
							</div>
							</form>
							</div>


						";
printFooter();

?>
