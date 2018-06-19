<?php

session_start();

if(!isset($_SESSION['userName'])){
	echo "You are not Logged in. <a href='logIn.php'> Return to the Log in Page</a>";
} else{
	echo "You are logged in as " .@$_SESSION['userName'].
	"You can return to the <a href='index.php'> Main page</a>";
	 "or you can <a href='sessionLogOut.php'> Log out </a>";
}

 ?>
