<?php

include('Blog/include/includeAll.php');

?>
 <?php

 checkUser();

 $userNme = checkUserID(@$_REQUEST['userID']);
 // $userPswd = checkPassword(@$_REQUEST['passWord']);

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
if (@$_REQUEST['userName'] != $userNme[0]['userName']){
	$Errors['userName'] = "required";
	var_dump($userNme);
	echo "Username Invalid <br/>";
}
// if (@$_REQUEST['passWord'] != $userPswd['passWord']) {
// 	$Errors['passWord'] = "required";
// 	echo "Password Invalid";
// }
// var_dump($userNme);
  ?>
