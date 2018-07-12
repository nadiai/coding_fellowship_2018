<?php

include('Blog/include/includeAll.php');

?>

<style type="text/css">
<?php
 include('Blog/include/websiteMasterStyle.css');
 ?>
</style>

<?php
	if(!isset($_SESSION['userID'])){
		//this part still doesnt work
		echo "You are not Logged in. <a href='logIn.php'> Return to the Log in Page</a>";
	} else{
		echo "<div class='logInConfBackDrop'><div class='logInConfirmation'> You are logged in!
		<br/> You can return to the <a href='/index.php'> Main page</a> <br/>
			or you can <a href='sessionLogOut.php'> Log out </a> </div></div>";
	}
	 ?>
