<?php

include('Project/include/headerPage.php');

$Errors = array();
if(isset($_REQUEST['loginSubmission'])){
	if ($_REQUEST['p_UserName'] == '') {
		$Errors['p_UserName'] = "required";
	}
	if ($_REQUEST['p_UserEmail'] == '') {
		$Errors['p_UserEmail'] = "required";
	}
	if (sizeof($Errors) == 0) {
		 insertUser( @$_REQUEST['p_UserName'], @$_REQUEST['p_UserEmail']);
		 $_SESSION['projectUserID'] = $_REQUEST['projectUserID'];
		 header('Location: /Project/view/questionsForm.php');
		 exit();
	}
}

printHeader();
?>
		<title> Login Page </title>
		<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
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
									<input type='text' placeholder='Email' name='p_UserEmail' value='".@$_REQUEST['p_UserEmail']."'/>
									<br/>
									<input type='submit' name='loginSubmission' value='Login' />
							</div>
							</form>
							</div>


						";
printFooter();

?>
