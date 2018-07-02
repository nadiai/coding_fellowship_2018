<?php

include('Project/include/headerPage.php');

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
									<input type='text' placeholder='Email' name='p_Email' value='".@$_REQUEST['p_UserEmail']."'/>
									<br/>
									<input type='submit' name='JobApplication' value='Login' />
							</div>
							</form>
							</div>


						";
printFooter();

?>
